<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EcuacionCuadraticaController extends Controller
{
    public function index(){
        return view('ecCuadratica');
    }

    public function resEcuaCuadratica(Request $request){
        $a = $request->input('varA');
        $b = $request->input('varB');
        $c = $request->input('varC');

        $d = ($b*$b) - 4*$a*$c;
        if($a == 0){
            $x1 = "No es una ecuacion cuadratica";
            $x2 = "No es una ecuacion cuadratica";
        } else if($d < 0){
            $x1 = (-$b/(2*$a))."+".(+sqrt(-$d))/(2*$a)."i";
            $x2 = (-$b/(2*$a))."".(-sqrt(-$d))/(2*$a)."i";
        } else {
            $x1 = (-$b + sqrt($d)) / (2*$a);
            $x2 = (-$b - sqrt($d)) / (2*$a);
        }

        $datos = array('a' => $a, 'b' => $b, 'c' => $c, 'x1' => $x1, 'x2' => $x2);
        return view('ecCuadratica', $datos);
    }
}
