<?php

namespace App\Http\Controllers;

use App\Models\Countries;

class CountriesController extends Controller
{
  /**
   * Get a list of countries with their respective cities.
   */
  public function getList($skipCount = 0, $takeCount = 4)
  {
    $countries = Countries::all()
      ->skip($skipCount)
      ->take($takeCount);
    foreach ($countries as $country) {
      $country->cities;
    }

    return $countries;
  }

  /**
   * Get a specific country
   */
  public function get($id)
  {
    return Countries::find($id);
  }
}
