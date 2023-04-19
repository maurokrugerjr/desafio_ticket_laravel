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
        $ticket->itemsRotulo = $request->itemsRotulo;
        $ticket->itemsCategoria = $request->itemsCategoria;

        $ticket->save();

        return redirect('/tickets')->with('msg', 'Ticket criado com sucesso!');
    }
}
