<?php

namespace App\Http\Controllers;
use App\Models\Flight;
use Illuminate\Http\Request;
use Illuminate\View\View;

class FlightController extends Controller
{
    //
    public function store(Request $request):String
    {
        error_log("dsfdsafaf");
        $novi=new Flight();
        error_log($request->all()['value']);
        $novi->parametar=$request->all()['value'];
        $novi->save();
        $nek8=Flight::all()->map(function (Flight $flight){return $flight->id;})->toArray();
       
        $svi=implode(', ', $nek8);
        return $svi;
    }
    public function create(Request $request)
    {
        error_log("dsfdsafaf");
        $novi=new Flight();
        $novi->parametar="heheheh";
        $novi->save();
        $nek8=Flight::all()->map(function (Flight $flight){return $flight->id;})->toArray();
       
        $svi=implode(', ', $nek8);
        return $svi;
    }
public function index(Request $request)
{
    return Flight::all();
}
}
