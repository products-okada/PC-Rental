<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

use DateTime;

class RentalLogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('rental_log')->insert(
            [
            [
            'pcid' => 'Y19MW1018',
            'status' => 0,
            'user' => '野村',
            'update' => new DateTime(),
            ],
            [
            'pcid' => 'Y19MW1018',
            'status' => 1,
            'user' => '野村',
            'update' => new DateTime(),
            ],
            [
            'pcid' => 'Y19MW1019',
            'status' => 0,
            'user' => '岡田',
            'update' => new DateTime(),
            ],
            [
            'pcid' => 'Y19MW1018',
            'status' => 1,
            'user' => '岡田',
            'update' => new DateTime(),
            ],
            [
            'pcid' => 'Y19MW1154',
            'status' => 0,
            'user' => '岡田',
            'update' => new DateTime(),
            ],
            [
            'pcid' => 'Y19MW1154',
            'status' => 1,
            'user' => '岡田',
            'update' => new DateTime(),
            ],
            [
            'pcid' => 'スピーカー',
            'status' => 0,
            'user' => '水野',
            'update' => new DateTime(),
            ],
            
            ]
            );
    }
}
