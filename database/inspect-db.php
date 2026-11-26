<?php
$pdo = new PDO('sqlite:database/database.sqlite');
$tables = $pdo->query("SELECT name, sql FROM sqlite_master WHERE type='table' AND name NOT LIKE 'sqlite_%' ORDER BY name");

foreach ($tables as $table) {
    echo "\n===== " . $table['name'] . " =====\n";
    echo $table['sql'] . "\n";
}
