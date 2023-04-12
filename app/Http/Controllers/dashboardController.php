<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\SiteCreate;

class dashboardController extends Controller
{
    public function dashboard() {

        $SiteCreate = SiteCreate::all();

        return view('site.dashboard', ['tickets' => $SiteCreate]);
    }
}
