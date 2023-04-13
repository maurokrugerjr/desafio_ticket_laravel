<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SiteCreate;

class criarTicketController extends Controller
{
    public function criar(){

        return view('site.create');

    }
    public function store(Request $request){

        $ticket = new SiteCreate;

        $ticket->title = $request->title;
        $ticket->description = $request->description;
        $ticket->prioridade = $request->prioridade;

        $ticket->save();

        return redirect('/dashboard')->with('msg', 'Ticket criado com sucesso!');
    }
}
