<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cities extends Model
{
    use HasFactory;
    protected $table = "cities";
    protected $name;

    public function country()
    {
        return $this->belongsTo(Countries::class, "country_id");
    }
}
