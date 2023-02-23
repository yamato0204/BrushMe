<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TeamUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('team_user')->insert([
            [
                'user_id' => 1,
                'team_id' => 1

            ],
            [
                'user_id' => 1,
                'team_id' => 2

            ],
        ]);
    }
}
