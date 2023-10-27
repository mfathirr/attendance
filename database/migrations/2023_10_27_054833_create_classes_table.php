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
        Schema::create('classes', function (Blueprint $table) {
            $table->id();
            $table->integer('id_user')->unsigned();
            $table->integer('id_student')->unsigned();
            $table->integer('grade');
            $table->enum('major', ['RPL', 'TKJ', 'DKV']);
            $table->foreign('id_user')->on('users')->references('id')->onDelete('cascade');
            $table->foreign('id_student')->on('students')->references('id')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('classes');
    }
};
