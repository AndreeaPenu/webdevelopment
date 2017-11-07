<?php

namespace App\Http\Controllers;

use App\Contest;
use App\Participation;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $contest = Contest::first();
        $winners = Participation::all()->sortByDesc('likes')->where('created_at','>', $contest->begin)->where('created_at','<', $contest->end)->take(1);
        return view('home',compact('winners'));
    }

}
