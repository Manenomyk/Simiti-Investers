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
        Schema::create('Pending_Suppliers', function(Blueprint $table){
            $table->id();
            $table->string('name')->required();
            $table->string('email')->required();
            $table->string('gender')->required();
            $table->string('location')->required();
            $table->string('region')->required();
            $table->string('phone')->required();
            $table->string('photo')->nullable();
            $table->string('category')->required();
            $table->string('sub_category')->nullable();
            $table->int('annual_turnover')->required();
            $table->string('boost')->nullable();
            $table->string('comment')->nullable();
            $table->boolean('isApproved')->default(false);
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
