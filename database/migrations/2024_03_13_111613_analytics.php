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
        Schema::create('Analytics', function(Blueprint $table){
            $table->id();
            $table->string('gender');
            $table->string('region');
            $table->string('location');
            $table->string('rating');
            $table->string('category');
            $table->string('subcategory');
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
