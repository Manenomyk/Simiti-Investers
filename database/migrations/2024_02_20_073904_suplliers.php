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
        Schema::create('Suppliers', function(Blueprint $table){
            $table->id();
            $table->string('name');
            $table->string('gender');
            $table->string('location');
            $table->string('region');
            $table->string('phone');
            $table->string('category');
            $table->string('sub-category');
            $table->string('annual-turnover');
            $table->boolean('boost');
            $table->boolean('comment');
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
