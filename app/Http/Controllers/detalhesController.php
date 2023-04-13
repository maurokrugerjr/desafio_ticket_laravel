<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SiteCreate;

class detalhesController extends Controller
{
    public function detalhes($id){

        $ticket = SiteCreate::findOrFail($id);

        return view('site.detalhes', ['ticket' => $ticket]); 
    }
}