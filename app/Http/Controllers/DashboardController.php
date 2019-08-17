<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $characters_total = \App\Character::where('alt', false)->get();
        $characters_total = count($characters_total);
        $characters = \App\Character::get();
        return view('dashboard', compact('characters', 'characters_total'));
    }
}
