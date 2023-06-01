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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('piece_id')->nullable();
            $table->foreign('piece_id')->references('id')->on('pieces')->onDelete('cascade');
            $table->unsignedBigInteger('user_id')->nullable();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->string('status')->default('initial');
            $table->string('phone')->nullable();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('email');
            $table->string('address')->nullable();
            $table->decimal('price',12,2);
            $table->integer('quantity')->default(1);
            $table->decimal('total',12,2);
            $table->decimal('taxe',12,2)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
