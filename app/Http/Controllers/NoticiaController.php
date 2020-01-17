<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//se pone el modelo
use App\Noticia;

class NoticiaController extends Controller
{
    public function index(){
        $noticias = Noticia::all();

        //aca puedo crear mis noticias
        //$noticias = array();
        //$noticias [] = ['titulo' => 'Yaquis toman la carretera'];
        //$noticias [] = ['titulo' => '¡Pavimentan todas las calles!'];
        $argumentos = array();
        $argumentos['noticias']= $noticias;
        //view regresara la direccion que le demos
        //view solo toma archivos blade.php
        return view("noticias.index",$argumentos);
    }
}
