<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class criarTicketController extends Controller
{
    public function criar(){

        return view('site.create');

    }
}
