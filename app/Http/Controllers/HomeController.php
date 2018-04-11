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
        $self_study = $this->calculate_lesson_time(false);
        $les = $this->calculate_lesson_time(true);
        return view('home',compact('self_study','les'));
    }

    private function calculate_lesson_time($les){
        $date = date("Y-m-d",strtotime("-1 week"));
        $r = DB::table('studymoments')
            ->where('in_class', $les)
            ->where('date','>=',$date)
            ->sum('duration');
       
        //$r = DB::select(DB::raw("SELECT SEC_TO_TIME(SUM(TIME_TO_SEC(`duration`))) as duration from studymoments where datum like :date and les = $les;"),array('date'=> $date));
        return $r;
    }
     /**;
    *   @return Returns an array with the number of hours per cours.
    */
    private function aantalUur(){
        $vakken = Vak::all();
        $uur = [];
        foreach($vakken as $vak){
            $uur[$vak->id] = is_null($this->calculateUur($vak->id)) ? "00:00": substr($this->calculateUur($vak->id),0,5);
        }
       return $uur;
    }

    private function calculateUur($st){
        $r = DB::select(DB::raw("SELECT  SEC_TO_TIME( SUM( TIME_TO_SEC( `tijd` ) ) ) AS timeSum  
        FROM studieMoment
        where vak_id=$st;"));
        return $r[0]->timeSum;
    }

    private function calculateStudieUrenWeek($les){
        $date = date("Y-m-d",strtotime("-1 week"));
        $r = DB::select(DB::raw("SELECT SEC_TO_TIME(SUM(TIME_TO_SEC(`tijd`))) as tijd from studieMoment where les = $les and datum > :date;"),array('date'=> $date));
        return $r[0]->tijd;
    }
    private function calculateStudieUrenWeekTot(){
        $date = date("Y-m-d",strtotime("-1 week"));
        $r = DB::select(DB::raw("SELECT SEC_TO_TIME(SUM(TIME_TO_SEC(`tijd`))) as tijd from studieMoment where datum > :date;"),array('date'=> $date));
       
        return $r[0]->tijd;
    }
    private function vorige_week(){
        $date = date("Y-m-d",strtotime("-1 week"));
        $r = DB::select(DB::raw("SELECT SEC_TO_TIME(SUM(TIME_TO_SEC(`tijd`))) as tijd from studieMoment where datum like :date;"),array('date'=> $date));
        return $r[0]->tijd;
    }
}
