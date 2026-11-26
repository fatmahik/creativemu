<?php
use Illuminate\Database\Migrations\Migration;use Illuminate\Database\Schema\Blueprint;use Illuminate\Support\Facades\Schema;
return new class extends Migration {public function up():void{
Schema::create('services',function(Blueprint $t){$t->id();$t->string('title');$t->string('slug')->unique();$t->string('category')->nullable();$t->string('excerpt',500)->nullable();$t->longText('description')->nullable();$t->string('icon')->nullable();$t->boolean('is_active')->default(true);$t->unsignedInteger('sort_order')->default(0);$t->timestamps();});
Schema::create('articles',function(Blueprint $t){$t->id();$t->string('title');$t->string('slug')->unique();$t->string('excerpt',500)->nullable();$t->longText('content');$t->string('image')->nullable();$t->timestamp('published_at')->nullable();$t->boolean('is_published')->default(false);$t->timestamps();});
Schema::create('clients',function(Blueprint $t){$t->id();$t->string('name');$t->string('logo')->nullable();$t->string('website')->nullable();$t->unsignedInteger('sort_order')->default(0);$t->timestamps();});
Schema::create('testimonials',function(Blueprint $t){$t->id();$t->string('name');$t->string('company')->nullable();$t->text('message');$t->unsignedTinyInteger('rating')->default(5);$t->boolean('is_active')->default(true);$t->timestamps();});
Schema::create('contacts',function(Blueprint $t){$t->id();$t->string('name');$t->string('email');$t->string('phone',40)->nullable();$t->string('service')->nullable();$t->text('message');$t->boolean('is_read')->default(false);$t->timestamps();});
}public function down():void{Schema::dropIfExists('contacts');Schema::dropIfExists('testimonials');Schema::dropIfExists('clients');Schema::dropIfExists('articles');Schema::dropIfExists('services');}};
