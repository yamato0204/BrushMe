<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class TeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('teams')->insert([
            [
                'name' => '英語',
                'information' => '英検準１級取得を目指します',
                'filename' => '',

            ],
            [
                'name' => 'バックエンドエンジニア',
                'information' => 'バックエンドエンジニアへの転職を目指します',
                'filename' => '',

            ]

            ]);
    }
}
