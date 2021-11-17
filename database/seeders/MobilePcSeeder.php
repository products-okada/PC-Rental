<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

use DateTime;

class MobilePcSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('mobile_pc')->insert(
            [
            [
            'pcid' => 'Y19MW1018',
            'status' => 1,
            'update' => new DateTime(),
            ],
            [
            'pcid' => 'Y19MW1019',
            'status' => 0,
            'update' => new DateTime(),
            ],
            [
            'pcid' => 'Y19MW1153',
            'status' => 1,
            'update' => new DateTime(),
            ],
            [
            'pcid' => 'Y19MW1154',
            'status' => 1,
            'update' => new DateTime(),
            ],
            [
            'pcid' => 'Y19MM064',
            'status' => 1,
            'update' => new DateTime(),
            ],
            [
            'pcid' => 'スピーカー',
            'status' => 0,
            'update' => new DateTime(),
            ],
            
            ]
            );
    }
}
