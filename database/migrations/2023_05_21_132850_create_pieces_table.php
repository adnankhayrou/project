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
        Schema::create('pieces', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->json('images')->nullable();
            $table->decimal('price');
            $table->string('phone');
            $table->string('status');
            $table->unsignedBigInteger('city_id');
            $table->foreign('city_id')->references('id')->on('cities')->onDelete('cascade');
            $table->string('serial_number');
            $table->string('reference');
            $table->decimal('width');
            $table->decimal('height');
            $table->string('type');
            $table->decimal('diameter')->nullable();
            $table->integer('load_index');
            $table->integer('speed_index');
            $table->unsignedBigInteger('brand_id');
            $table->foreign('brand_id')->references('id')->on('brands')->onDelete('cascade');
            $table->unsignedBigInteger('model_id');
            $table->foreign('model_id')->references('id')->on('models')->onDelete('cascade');
            $table->unsignedBigInteger('motorization_id');
            $table->foreign('motorization_id')->references('id')->on('motorizations')->onDelete('cascade');
            $table->unsignedBigInteger('etat_id');
            $table->foreign('etat_id')->references('id')->on('etats')->onDelete('cascade');
            $table->boolean('active');
            $table->decimal('new_price');
            $table->date('starts_at');
            $table->date('ends_at');
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->unsignedBigInteger('category_id');
            $table->foreign('category_id')->references('id')->on('categories');
            $table->text('description');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pieces');
    }
};
