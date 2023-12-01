<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\support\Facades\DB;

class Marca extends Controller
{
    public function index(){
        $mar = DB:: table('marca')->get();
        return view('marcas.listado', ['marca'=>$mar]);
    }
}
