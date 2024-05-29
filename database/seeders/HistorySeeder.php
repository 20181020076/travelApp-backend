<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HistorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("histories")->insert([
            [
                "weather" => 288,
                "weather_icon" => "01d.png",
                "currency_cop" => 5000,
                "converted_currency" => 108.20,
                "country_id" => 1,
                "city_id" => 1
            ],
        ]);
    }
}
