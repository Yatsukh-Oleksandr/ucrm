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
            $table->string('docs_status_name', 32);
            $table->boolean('active')->default(1);
        });

        DB::table('docs_status')->insert([
            ['docs_status_id' => 1, 'docs_status_name' => 'Новий', 'active' => 1],
            ['docs_status_id' => 2, 'docs_status_name' => 'На узгодженні', 'active' => 1],
            ['docs_status_id' => 3, 'docs_status_name' => 'Повернутий з узгодження', 'active' => 1],
            ['docs_status_id' => 4, 'docs_status_name' => 'На доопрацюванні', 'active' => 1],
            ['docs_status_id' => 5, 'docs_status_name' => 'Узгоджений', 'active' => 1],
            ['docs_status_id' => 6, 'docs_status_name' => 'На розгляді', 'active' => 1],
            ['docs_status_id' => 7, 'docs_status_name' => 'На виконанні', 'active' => 1],
            ['docs_status_id' => 8, 'docs_status_name' => 'Виконаний', 'active' => 1],
            ['docs_status_id' => 9, 'docs_status_name' => 'Закритий', 'active' => 1],
        ]);
    }

    public function down(): void
    {
        Schema::dropIfExists('docs_status');
    }
};
