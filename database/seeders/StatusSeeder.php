<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class StatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $status = [
            ['name' => "En Stock"],
            ['name' => "En Cour d'approvisionnement"],
            ['name' => "En Rupture"]
        ];

        DB::table('statuses')->insert($status);
    }
}
