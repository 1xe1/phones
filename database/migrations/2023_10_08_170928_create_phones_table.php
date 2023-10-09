<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('phones', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('brand');
            $table->string('model');
            $table->integer('storage_capacity');
            $table->string('color');
            $table->enum('condition', ['New', 'Used', 'Refurbished']);
            $table->decimal('price', 10, 2);
            $table->text('description');
            $table->string('image_url');
            $table->date('posted_date');
            $table->string('seller_name');
            $table->string('seller_email');
            $table->string('seller_phone');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('phones');
    }
};
