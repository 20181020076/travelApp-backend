<?php

namespace App\Http\Controllers;

use App\Models\History;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class HistoryController extends Controller
{
    /**
     * Get all histories.
     */
    public function getAll($skipCount = 0, $takeCount = 4)
    {
        $histories = History::all()
            ->skip($skipCount)
            ->take($takeCount);
        foreach ($histories as $history) {
            $history->countries;
            $history->cities;
        }

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
