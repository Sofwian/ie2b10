<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;

class Kad04_1Controller extends Controller
{
    //
    public function index($calDate = 0){
        if($calDate == 0){
            $dt = new Carbon();
        }else{
            $dt = new Carbon($calDate);
        }
        $cal = $this -> createCarendar($dt);
        return view('kad04_1',compact('dt','cal'));
    }
    function createCarendar($dt){
        $day = 1;
        for ($i = 0; $i < (6*7); $i++) {
            if ($i < $dt->copy()->startOfMonth()->dayOfWeek){
                $cal[$i] = ' ';
            }else if ($day <= $dt->daysInMonth) {
                $cal[$i] = $day;
                $day++;
            }else{
                $cal[$i] = ' ';
            }
        }
        $cal = array_chunk($cal, 7);
        return $cal;
    }
}
