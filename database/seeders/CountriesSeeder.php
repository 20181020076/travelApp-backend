<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CountriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("countries")->insert([
            [
                "name" => "india",
                "code" => "in",
                "currency_code" => "inr"
            ],
            [
                "name" => "dinamarca",
                "code" => "dk",
                "currency_code" => "dkk"
            ],
            [
                "name" => "inglaterra",
                "code" => "gb",
                "currency_code" => "gbp"
            ],
            [
                "name" => "japon",
                "code" => "jp",
                "currency_code" => "jpy"
            ],
        ]);
    }
}
