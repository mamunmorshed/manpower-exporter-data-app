<?php

namespace App\Http\Controllers;

use App\Agent;
use App\Worker;
use Carbon\Carbon;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
//    public function __construct()
//    {
//        $this->middleware('auth');
//    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $after = Carbon::Today()->addDay(2)->format('Y-m-d');
        $today = Carbon::Today()->format('Y-m-d');
        $before = Carbon::Today()->subDay(2)->format('Y-m-d');

        $workerFilter = [['flight_date','>=', $today],['flight_date','<=', $after]];
        $workerNotification = (new Worker())->where($workerFilter)->orderBy('flight_date', 'asc')->get();
        foreach ($workerNotification as $worker){
            if ($worker->flight_date == $today){
                $worker->flight_date = "today";
            }else{
                $worker->flight_date = "on ".$worker->flight_date;
            }
        }
        $data['workers'] = $workerNotification;


        $agentFilter = [['flight_date','<', $today],['flight_date','>=', $before]];
        $agentNotification = (new Worker())->with('workerAgent')->where($agentFilter)->orderBy('flight_date', 'asc')->get();
        foreach ($agentNotification as $agent){
            if ($agent->agent){
                $agent->agentName = $agent->workerAgent->name;
            }
        }
        $data['agents'] = $agentNotification;

        return view('landing', $data);
    }
}
