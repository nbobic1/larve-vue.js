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
    public function NoviControllerAction(Request $request):String
    {
        return $request->mm;
    }
    public function dd(Request $request):String
    {
      $input = $request->all();
      error_log($input['ddd']);
      print_r($input);
    }
}
