<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;

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
            [
                'name' => "En Stock",
                'color' => "green",
                'background' => 'green',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'name' => "Rapprovisionnement",
                'color' => "yellow",
                'background' => 'yellow',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'name' => "En Rupture",
                'color' => "gray",
                'background' => 'gray',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'name' => "Indisponible",
                'color' => "red",
                'background' => 'red',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]
        ];

        DB::table('statuses')->insert($status);
    }
}
