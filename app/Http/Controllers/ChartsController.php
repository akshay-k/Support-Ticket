<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use App\Http\Requests;
use App\User;
use App\Ticket;
use Charts;

class ChartsController extends Controller
{
    //
    public function index()
    {
//        $chart = Charts::multi('bar', 'material')
//            // Setup the chart settings
//            ->title("Tickets History")
//            // A dimension of 0 means it will take 100% of the space
//            ->dimensions(0, 400) // Width x Height
//            // This defines a preset of colors already done:)
//            ->template("material")
//            // You could always set them manually
//            // ->colors(['#2196F3', '#F44336', '#FFC107'])
//            // Setup the diferent datasets (this is a multi chart)
//            ->dataset('Element 1', [5,20,100])
//            ->dataset('Element 2', [15,30,80])
//            ->dataset('Element 3', [25,10,40])
//            // Setup what the values mean
//            ->labels(['One', 'Two', 'Three']);

        $chart = Charts::database(Ticket::all(), 'pie', 'highcharts')
            ->title("Ticket Status")
            ->elementLabel("Tickets")
            ->dimensions(1000, 500)
            ->responsive(true)
            ->groupBy('status');


        return view('home', compact('chart'));
    }
}
