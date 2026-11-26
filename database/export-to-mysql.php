<?php
$pdo = new PDO('sqlite:' . __DIR__ . '/database.sqlite');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$out = [];
$out[] = "SET NAMES utf8mb4;";
$out[] = "SET FOREIGN_KEY_CHECKS=0;";
$out[] = "";

$tables = $pdo->query("
    SELECT name FROM sqlite_master
    WHERE type='table'
    AND name NOT LIKE 'sqlite_%'
    ORDER BY name
")->fetchAll(PDO::FETCH_COLUMN);

function mysqlDefault($value, $pdo) {
    if ($value === null) return '';
    $v = trim($value);
    if (preg_match('/^CURRENT_TIMESTAMP(?:\(\))?$/i', $v)) return ' DEFAULT CURRENT_TIMESTAMP';
    if (is_numeric($v)) return ' DEFAULT ' . $v;
    if (strlen($v) >= 2 && $v[0] === "'" && substr($v, -1) === "'") {
        $v = str_replace("''", "'", substr($v, 1, -1));
    }
    return ' DEFAULT ' . $pdo->quote($v);
}

foreach ($tables as $table) {
    $safe = '`' . str_replace('`', '``', $table) . '`';
    $columns = $pdo->query("PRAGMA table_info(" . $safe . ")")->fetchAll(PDO::FETCH_ASSOC);

    $defs = [];
    $primary = [];

    foreach ($columns as $c) {
        $name = '`' . str_replace('`', '``', $c['name']) . '`';
        $type = strtolower($c['type']);

        if (str_contains($type, 'int')) {
            $mysqlType = ($c['pk'] && count(array_filter($columns, fn($x) => $x['pk'])) === 1)
                ? 'BIGINT UNSIGNED'
                : (str_contains($type, 'tinyint') ? 'TINYINT' : 'BIGINT');
        } elseif (str_contains($type, 'varchar') || str_contains($type, 'char')) {
            $mysqlType = 'VARCHAR(255)';
        } elseif (str_contains($type, 'datetime')) {
            $mysqlType = 'DATETIME';
        } elseif (str_contains($type, 'text')) {
            $mysqlType = 'LONGTEXT';
        } else {
            $mysqlType = 'LONGTEXT';
        }

        $def = $name . ' ' . $mysqlType;

        if ($c['pk']) $primary[] = $name;

        if ($c['pk'] && count(array_filter($columns, fn($x) => $x['pk'])) === 1 && str_contains($type, 'int')) {
            $def .= ' NOT NULL AUTO_INCREMENT';
        } elseif ($c['notnull'] || $c['pk']) {
            $def .= ' NOT NULL';
        } else {
            $def .= ' NULL';
        }

        if ($c['dflt_value'] !== null && !str_contains($def, 'AUTO_INCREMENT')) {
            $def .= mysqlDefault($c['dflt_value'], $pdo);
        }

        $defs[] = $def;
    }

    if ($primary) $defs[] = 'PRIMARY KEY (' . implode(', ', $primary) . ')';

    $out[] = "CREATE TABLE IF NOT EXISTS $safe (\n  " . implode(",\n  ", $defs) . "\n) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;";
    $out[] = "";

    $indexes = $pdo->query("PRAGMA index_list(" . $safe . ")")->fetchAll(PDO::FETCH_ASSOC);
    foreach ($indexes as $idx) {
        $indexName = $idx['name'];
        $indexCols = $pdo->query("PRAGMA index_info('" . str_replace("'", "''", $indexName) . "')")->fetchAll(PDO::FETCH_ASSOC);
        $names = array_map(fn($x) => '`' . str_replace('`', '``', $x['name']) . '`', $indexCols);
        if (!$names) continue;
       $indexSqlName = '`idx_' . substr(md5($table . '_' . $indexName), 0, 16) . '`';
    }
    $out[] = "";

    $rows = $pdo->query("SELECT * FROM $safe")->fetchAll(PDO::FETCH_ASSOC);
    foreach ($rows as $row) {
        $names = array_map(fn($n) => '`' . str_replace('`', '``', $n) . '`', array_keys($row));
        $values = array_map(fn($v) => $v === null ? 'NULL' : $pdo->quote((string)$v), array_values($row));
        $out[] = "INSERT INTO $safe (" . implode(', ', $names) . ") VALUES (" . implode(', ', $values) . ");";
    }
    $out[] = "";
}

$out[] = "SET FOREIGN_KEY_CHECKS=1;";
file_put_contents(dirname(__DIR__) . '/creativemu-mysql.sql', implode("\n", $out));
echo "BERHASIL: creativemu-mysql.sql berhasil dibuat.\n";
echo "Jumlah tabel: " . count($tables) . "\n";
echo "Ukuran file: " . filesize(dirname(__DIR__) . '/creativemu-mysql.sql') . " bytes\n";
