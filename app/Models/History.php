<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class History extends Model
{
    use HasFactory;
    protected $table = "histories";
    protected $weather;
    protected $weatherIcon = "weather_icon";
    protected $currencyCop = "currency_cop";
    protected $convertedCurrency = "converted_currency";

    public function countries()
    {
        return $this->hasMany(Countries::class, "id");
    }

    public function cities()
    {
        return $this->hasMany(Cities::class, "id");
    }
}
