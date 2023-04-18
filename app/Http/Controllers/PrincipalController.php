<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrincipalController extends Controller
{
    public function index (){

        return view('site.principal');

    }

    public function visualizar(){

        return view('site.menu-principal');
    }
}
