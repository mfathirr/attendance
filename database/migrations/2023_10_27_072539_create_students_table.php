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
        Schema::create('students', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_class')->unsigned();
            $table->string('name');
            $table->integer('nisn');
            $table->string('birth_place');
            $table->integer('birth_time');
            $table->enum('religion', ['islam', 'kristen', 'hindu', 'budha']);
            $table->text('address');
            $table->foreign('id_class')->on('classes')->references('id')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
