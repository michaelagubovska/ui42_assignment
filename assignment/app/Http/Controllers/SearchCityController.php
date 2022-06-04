<?php

namespace App\Http\Controllers;

use App\Models\City;
use Throwable;

class SearchCityController extends Controller
{
    public function index()
    {
        $city = null;

        if(request()->has('search-city')){
            try {
                $search_bar = request()->query('search-city');
                $city = City::where('name', 'ilike', $search_bar)->firstOrFail();
                return redirect('city/'.$city->id)->with('city-id', $city->id);
            } catch (Throwable $e) {
                return view('pages/cityDetail')->with('city', $city);
            }
        } else {
            return back();
        }
    }

    public function show()
    {
        $city_id = request('id');
        $city = City::where('id','=',$city_id)->firstOrFail();

        return view('pages/cityDetail')->with('city', $city);
    }
}
