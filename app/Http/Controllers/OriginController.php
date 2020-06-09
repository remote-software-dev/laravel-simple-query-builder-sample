<?php

namespace App\Http\Controllers;

use App\Origin;
use DB;

class OriginController extends Controller
{
    public function index()
    {
        $countries = Origin::all();
        return view('index', compact('countries'));
    }

    public function show($id)
    {
        $country = DB::table('origins')
            ->join('cars', 'origins.id', '=', 'cars.origin_id')
            ->where('origins.id', '=', $id)
            ->select(
                'origins.name as origin_name',
                'cars.manufacturer as car_manufacturer'
            )
            ->get();
        return view('show', compact('country'));
    }
}
