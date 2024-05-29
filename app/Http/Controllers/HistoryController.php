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
        $histories = History::all()
            ->skip($skipCount)
            ->take($takeCount);
        foreach ($histories as $history) {
            $history->countries;
            $history->cities;
        }

        return $histories;
    }
}
