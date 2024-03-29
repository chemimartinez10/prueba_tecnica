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
        Schema::create('emails', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('subject');
            $table->string('message');
            $table->string('to_email');
            $table->boolean('status');
            $table->bigInteger('from_user');
            $table->bigInteger('to_user');


            $table->foreign('from_user')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('to_user')->references('id')->on('users')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('emails');
    }
};
