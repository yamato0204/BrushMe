<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('articles')->insert([
            [
                'body' => 'おはようございます。今日はライティングを学習します。',
                'user_id' => 1,
                'team_id' => 1,

            ],
           

            ]);
    }
}
