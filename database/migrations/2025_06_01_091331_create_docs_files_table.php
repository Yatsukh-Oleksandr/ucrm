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
        Schema::create('docs_files', function (Blueprint $table) {
            $table->id('id');
            $table->unsignedBigInteger('docs_id');
            $table->unsignedBigInteger('file_id');

            $table->foreign('docs_id')->references('docs_id')->on('docs')->onDelete('cascade');
            $table->foreign('file_id')->references('file_id')->on('files')->onDelete('cascade');
        });


    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('docs_files');
    }
};
