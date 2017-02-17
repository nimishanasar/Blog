<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class helloController extends Controller
{
    //
    public function index()
    {
        return view('calc');
    }
    public function add(Request $request){
        echo $request->number1;
        echo "<br />";
        echo $request->number2;
         echo "<br />";
        $num3=$request->number1+$request->number2;
        return view('result',['result'=>$num3]);
    }
}
