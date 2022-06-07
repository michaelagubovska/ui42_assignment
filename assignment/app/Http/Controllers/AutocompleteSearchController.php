<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\City;
class AutocompleteSearchController extends Controller
{
    public function index()
    {
        return view('pages/home');
    }

    public function autocomplete(Request $request)
    {
        $query = $request->get('query');
        $filterResult = City::where('name', 'ilike', '%'. $query. '%')->get();
        return response()->json($filterResult);
    }
}
