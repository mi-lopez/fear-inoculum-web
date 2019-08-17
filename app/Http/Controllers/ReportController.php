<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class ReportController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $specs = \App\Character::groupBy('spec_id')->select('spec_id', DB::raw('count(*) as total'))->orderBy('total', 'desc')->get();
        $races = \App\Character::groupBy('race_id')->select('race_id', DB::raw('count(*) as total'))->orderBy('total', 'desc')->get();
        $classes = \App\Character::groupBy('class_id')->select('class_id', DB::raw('count(*) as total'))->orderBy('total', 'desc')->get();

        $professions = \App\Character::getProfessions();



        return view('report', compact('specs', 'races', 'classes', 'professions'));
    }
}
