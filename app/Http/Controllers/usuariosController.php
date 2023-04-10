<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class usuariosController extends Controller
{
    public function usuarios() {


        return view('site.usuarios');
    }
}
