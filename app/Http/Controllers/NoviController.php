<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
/**
 * @OA\Info(title="My First API", version="0.1")
 
   @OA\PathItem(path="/api/moja")
     */
class NoviController extends Controller
{
    //
    public function NoviControllerAction():String
    {
        return "moja";
    }
}
