<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SiteCreate;

class PrincipalController extends Controller
{
    public function index (){

        $tickets = SiteCreate::all();

        return view('site.principal', ['tickets' => $tickets]);
    }

    public function visualizar(){

        return view('site.menu-principal');
    }

    public function destroy($id){

        SiteCreate::findOrFail($id)->delete();

        return redirect('/tickets')->with('msg', 'Ticket excluído com sucesso!');
    }

    public function edit($id){

        $ticket = SiteCreate::findOrFail($id);

        return view('site.edit', ['ticket'=>$ticket]);
    }

    public function update(Request $request){

        SiteCreate::findOrFail($request->id)->update($request->all());

        return redirect('/tickets')->with('msg', 'Ticket editado com sucesso!');
    }
}
