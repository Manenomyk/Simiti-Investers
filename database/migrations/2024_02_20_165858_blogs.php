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
            $table->string('title');
            $table->string('content1');
            $table->string('image1');
            $table->string('content2');
            $table->string('image2');
            $table->string('video1');
            $table->string('content3');
            $table->string('video2');
            $table->string('profile');
            $table->string('about');
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
