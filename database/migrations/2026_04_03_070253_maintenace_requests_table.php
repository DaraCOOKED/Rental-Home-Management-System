<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Symfony\Component\Mime\Email;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
       Schema::create('maintence_requests', function (Blueprint $table) {
            $table->id();
            $table->integer('unit_id');
            $table->integer('tenat_id');
            $table->string('Email');
            $table->string('title');
            $table->string('status_request');
            $table->string('description');
            $table->string('priority')->default('medium');
            $table->string('assigned_to')->nullable();
            $table->date('est_completion')->nullable();
            $table->date('submitted_date')->nullable();
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
