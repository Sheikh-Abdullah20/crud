<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
          $table->unsignedBigInteger('user_id')->autoIncrement();
          $table->primary('user_id');
          $table->string('user_name');
          $table->string('user_email')->unique();
          $table->string('user_city')->nullable();
          $table->integer('user_age');
          $table->timestamp('user_created')->default(DB::raw("CURRENT_TIMESTAMP"));
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
