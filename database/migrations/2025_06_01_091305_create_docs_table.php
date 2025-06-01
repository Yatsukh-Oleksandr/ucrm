<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('docs', function (Blueprint $table) {
            $table->id('docs_id');
            $table->integer('docs_hash');
            $table->string('docs_name', 32);
            $table->unsignedBigInteger('docs_type_id')->nullable();
            $table->unsignedBigInteger('docs_status_id')->nullable();
            $table->unsignedBigInteger('access_id')->nullable();
            $table->unsignedBigInteger('priority_id')->nullable();
            $table->string('abstract', 256)->nullable();
            $table->unsignedBigInteger('parent_docs_id')->nullable();
            $table->dateTime('deadline')->nullable();
            $table->timestamp('date_created')->useCurrent();
            $table->timestamp('date_updated')->useCurrent();

            $table->foreign('docs_type_id')->references('docs_type_id')->on('docs_type');
            $table->foreign('docs_status_id')->references('docs_status_id')->on('docs_status');
            $table->foreign('access_id')->references('access_id')->on('doc_access');
            $table->foreign('priority_id')->references('priority_id')->on('priority_id');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('docs');
    }
};
