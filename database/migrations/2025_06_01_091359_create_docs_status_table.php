<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('docs_status', function (Blueprint $table) {
            $table->id('docs_status_id');
            $table->string('name', 32);
        });

    }

    public function down(): void
    {
        Schema::dropIfExists('docs_status');
    }
};
