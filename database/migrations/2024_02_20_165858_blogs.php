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
        Schema::create('Blogs', function(Blueprint $table){
            $table->id();
            $table->string('title')->required();
            $table->string('content1')->required();
            $table->string('image1')->required();
            $table->string('content2')->nullable();
            $table->string('image2')->nullable();
            $table->string('video1')->nullable();
            $table->string('content3')->nullable();
            $table->string('video2')->nullable();
            $table->string('profile')->nullable();
            $table->string('about')->nullable();
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
