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
        Schema::create('visacategories', function (Blueprint $table) {
            $table->id();
            $table->string('Visa_Category_Name');
            $table->integer('Validity_Period_in_Days')->nullable();
            $table->integer('Max_Length_of_Stay_in_Days')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('visacategories');
    }
};


