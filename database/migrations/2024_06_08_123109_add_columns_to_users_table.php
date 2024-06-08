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
      $table->enum('status', ['active', 'pending'])->default('pending');
      $table->enum('type', ['admin', 'adviser', 'regular'])->nullable();
      $table->unsignedBigInteger('year_level_id')->nullable();

      $table->foreign('year_level_id')->references('id')->on('year_levels')->onDelete('set null');
    });
  }

  /**
    * Reverse the migrations.
  */
  public function down(): void
  {
    Schema::table('users', function (Blueprint $table) {
      $table->dropForeign(['year_level_id']);
      $table->dropColumn('status');
      $table->dropColumn('type');
      $table->dropColumn('year_level_id');
    });
  }
};
