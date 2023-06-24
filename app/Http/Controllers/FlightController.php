<?php

namespace App\Http\Controllers;
use App\Models\Flight;
use Illuminate\Http\Request;

class FlightController extends Controller
{
    //
    public function create(Request $request):String
    {
error_log("dsfdsafaf");
        $novi=new Flight();
        $novi->save();
        $nek8=Flight::all()->map(function (Flight $flight){return $flight->id;})->toArray();
       
        $svi=implode(', ', $nek8);
        return $svi;
    }
}
