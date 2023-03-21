<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
  /**
   * Run the migrations.
   */
  public function up(): void {
    Schema::create('experiences', function (Blueprint $table) {
      $table->id();
      $table->year("year");
      $table->string("period");
      $table->string("title");
      $table->string("company");
      $table->string("companyLink")->nullable();
      $table->string("companyLogo")->nullable();
      $table->text("content");
      $table->timestamps();
    });
  }
  
  /**
   * Reverse the migrations.
   */
  public function down(): void {
    Schema::dropIfExists('experiences');
  }
};
