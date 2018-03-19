<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;

use App\Ticket;
use Charts;


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
        $chart = Charts::database(Ticket::all(), 'pie', 'highcharts')
            ->title("Ticket Status")
            ->elementLabel("Tickets")
            ->dimensions(1000, 500)
            ->responsive(true)
            ->groupBy('status');


        return view('home', compact('chart'));
    }
}
