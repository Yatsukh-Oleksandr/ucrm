<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Doc;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class DocsSeeder extends Seeder
{
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        Doc::truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        for ($i = 1; $i <= 10; $i++) {
            Doc::create([
                'docs_name' => "Test Document $i",
                'docs_type_id' => rand(1, 3),
                'docs_status_id' => rand(1, 3),
                'access_id' => rand(1, 2),
                'priority_id' => rand(1, 5),
                'parent_docs_id' => null,
                'Deadline' => now()->addDays(rand(1, 30))->format('Y-m-d'),
                'date_created' => now()->subDays(rand(10, 50))->format('Y-m-d'),
                'date_updated' => now()->format('Y-m-d'),
                'docs_hash' => Str::random(40),
                'abstract' => "Abstract text for document $i",
            ]);
        }
    }
}
