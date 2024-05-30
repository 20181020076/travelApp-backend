<?php

namespace App\Http\Controllers;

use App\Models\History;
use Illuminate\Http\Request;

class HistoryController extends Controller
{
    /**
     * Get all histories.
     */
    public function getAll($skipCount = 0, $takeCount = 4)
    {
        if (request()->has('skipCount')) {
            $skipCount = request()->query("skipCount");
        }
        if (request()->has('takeCount')) {
            $takeCount = request()->query("takeCount");
        }
        $histories = History::query()
            ->skip($skipCount)
            ->take($takeCount)
            ->orderBy('updated_at', 'desc')
            ->get();

        return $histories;
    }

    /**
     * Create a new history.
     */
    public function create(Request $request)
    {
        $history = History::create([
            "weather" => $request->weather,
            "weather_icon" => $request->weatherIcon,
            "currency_cop" => $request->currencyCop,
            "converted_currency" => $request->convertedCurrency,
            "country_id" => $request->countryId,
            "city_id" => $request->cityId
        ]);

        return $history;
    }
}
