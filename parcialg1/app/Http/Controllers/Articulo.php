<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\support\Facades\DB;

class Articulo extends Controller
{
    public function index(){
        $artic = DB:: table('articulo') ->join('marca', 'marca', '=', 'idMarca')->get();
        return view('articulos.listado', ['arti'=>$artic]);
    }
}
