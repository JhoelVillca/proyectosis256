<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InicioController extends Controller
{
    public function index()
    {
        echo "Hola desde el controlador InicioController y su metodo index";
    }
    public function saludo(){
        echo "Hola esto es un saludo";
    }
    public function nombre(){
        echo "Hello my name is Jhoel :)";
    }
    public function Resultado(){ 
        echo "Esto es el resultado: ".(5+4);
    }
    public function prueba(){
        echo "Haciendo una prueba";
    }

    public function Invocar(){
        return view('invocar');
    }

    public function presentacion(){
        return view('presentacion');
    }
    
    public function comentario(){
        return view('comentarios');
    }
    public function kvkOrden(){
        $a = 666;
        $c = 572;
        for($i=$c; $i <= $a ;) { 
            for($j=1; $j<=4 ; $j++) { 
                $i++;
                echo $i."_   _";
            }
            echo "<br>";
        }
    }
}