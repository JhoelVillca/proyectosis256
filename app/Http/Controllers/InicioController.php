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

  //hello world!
    
    public function Invocar(){
        $datos = array('Saludo' => 'Hola', 'mensaje' => 'contesta la web');
        return view('invocar', $datos);
    }

    public function presentacion(){
        return view('presentacion');
    }
    
    public function comentario(){
        return view('comentarios');
    }
}