<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('category_name');
            $table->string('price');
            $table->string('description');
            $table->string('item_condition');
            $table->string('item_type');
            $table->tinyInteger('status')->default(0);
            $table->binary('item_photo');
            //owner
            $table->string('owner_name');
            $table->integer('contact');
            $table->string('address');
            $table->timestamps();
        });
    }
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
