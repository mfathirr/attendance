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
        Schema::table('users', function (Blueprint $table) {
            $table->string('birth_place')->after('password');
            $table->string('birth_time')->after('birth_place');
            $table->enum('religion', ['Islam', 'Kristen', 'Hindu', 'Budha'])->after('birth_time');
            $table->text('address')->after('religion');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            //
        });
    }
};
