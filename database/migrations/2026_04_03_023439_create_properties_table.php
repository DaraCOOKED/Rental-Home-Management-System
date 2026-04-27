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
        Schema::create('property_requests', function (Blueprint $table) {
            $table->id();
            $table->string('unit_id');
            $table->string('tenat_id'); // Keeping your spelling: tenat_id
            $table->string('Email');    // Keeping your capitalization: Email
            $table->string('title');
            $table->string('status_request');
            $table->text('description');
            
            // Since your model has public $timestamps = false, 
            // I am leaving $table->timestamps() out.
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('property_requests');
    }
};