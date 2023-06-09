<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator,Redirect,Response;
use App\Models\{Country,State,City,study};

class CountryStateCityController extends Controller
{

    public function index()
    {
        $data['countries'] = Country::get(["name","id"]);

        $edu['studies'] = study::get(["qualification"]);
        return view('register',$edu,$data);
    }
    public function getState(Request $request)
    {
        $data['states'] = State::where("country_id",$request->country_id)
                    ->get(["name","id","phone_code"]);
        return response()->json($data);
    }
    public function getCity(Request $request)
    {
        $data['cities'] = City::where("state_id",$request->state_id)
                    ->get(["name","id"]);
        return response()->json($data);
    }
    public function getPhone(Request $request)
    {
        $data['countries'] = Country::where("country_id",$request->country_id)
                    ->get(["phone_code"]);
        return response()->json($data);
    }

}
