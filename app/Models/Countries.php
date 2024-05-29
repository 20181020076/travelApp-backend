<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Countries extends Model
{
    use HasFactory;
    protected $table = "countries";
    protected $name;
    protected $code;
    protected $currencyCode;

    public function cities()
    {
        return $this->hasMany(Cities::class, "country_id");
    }
}
