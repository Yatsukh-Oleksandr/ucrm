<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('docs_type', function (Blueprint $table) {
            $table->id('docs_type_id');
            $table->string('name', 32);
        });

    }

    public function down(): void
    {
        Schema::dropIfExists('docs_type');
    }
};
