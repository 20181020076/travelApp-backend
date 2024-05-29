<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHistoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('histories', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->double("weather");
            $table->string("weather_icon");
            $table->decimal("currency_cop");
            $table->decimal("converted_currency");
            $table->foreignId("country_id")
                ->constrained("countries", "id")
                ->onUpdate("cascade")
                ->onDelete("cascade");
            $table->foreignId("city_id")
                ->constrained("cities", "id")
                ->onUpdate("cascade")
                ->onDelete("cascade");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('history');
    }
}
