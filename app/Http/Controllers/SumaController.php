<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SumaController extends Controller
{
    //
    public function index(){
        return view('rsumar');
    }

    public function sumar(Request $request){
        $a = $request->input('varA');
        $b = $request->input('varB');
        $s = $a + $b;

        $datos = array('a' => $a, 'b' => $b, 's' => $s);
        return view('rsumar', $datos);
    }

    
}
