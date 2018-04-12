<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
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
        $self_study = $this->calculate_lesson_time(false,'<=');
        $les = $this->calculate_lesson_time(true,'<=');
        $previous_week = $this->calculate_lesson_time(true,'=');
        return view('home',compact('self_study','les','previous_week'));
    }
    
    private function calculate_lesson_time($les, $when){
        $date = date("Y-m-d",strtotime("-1 week"));
        $r = DB::table('studymoments')
            ->where('in_class', $les)
            ->where('date',$when, $date)
            ->sum('duration');
        return $r;
    }
}
