<?php

namespace App\Http\Controllers;

use App\Contest;
use App\Mail\WinnerChosen;
use App\Participation;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

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
        //periodes checken voor winnaar
        $current_date = Carbon::now();

        $contest = Contest::first();
        $winners = Participation::all()->sortByDesc('likes')->where('created_at','>=', $contest->start)->where('created_at','<=', $contest->end)->take(1);

        $contest2 = Contest::findOrFail(2);
        $winners2 = Participation::all()->sortByDesc('likes')->where('created_at','>=', $contest2->start)->where('created_at','<=', $contest2->end)->take(1);

        $contest3 = Contest::findOrFail(3);
        $winners3 = Participation::all()->sortByDesc('likes')->where('created_at','>=', $contest3->start)->where('created_at','<=', $contest3->end)->take(1);

        $contest4 = Contest::findOrFail(4);
        $winners4 = Participation::all()->sortByDesc('likes')->where('created_at','>=', $contest4->start)->where('created_at','<=', $contest4->end)->take(1);

        if(($winners || $winners2 || $winners3 || $winners4) && ($current_date = $contest->end || $current_date = $contest2->end || $current_date = $contest3->end || $current_date = $contest4->end)){
          // $this->sendMail();
        }

        return view('home',compact('winners','winners2','winners3','winners4','contest','contest2','contest3','contest4','current_date'));
    }


    public function sendMail(){
        $mail = 'marzone.ap@gmail.com';
        Mail::to($mail)->send(new WinnerChosen);
    }
}
