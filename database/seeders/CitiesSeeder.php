<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CitiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("cities")->insert([
            [
                "name" => "mumbai",
                "country_id" => 1
            ],
            [
                "name" => "nueva delhi",
                "country_id" => 1
            ],
            [
                "name" => "copenhague",
                "country_id" => 2
            ],
            [
                "name" => "aarhus",
                "country_id" => 2
            ],
            [
                "name" => "londres",
                "country_id" => 3
            ],
            [
                "name" => "manchester",
                "country_id" => 3
            ],
            [
                "name" => "tokio",
                "country_id" => 4
            ],
            [
                "name" => "osaka",
                "country_id" => 4
            ],
        ]);
    }
}
