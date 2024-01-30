<?php

namespace App\Http\Controllers;

use App\Models\Train;

use Illuminate\Http\Request;

class TrainController extends Controller
{
    public function index()
    {
        $todayTrains = Train::where('departure_time', '>=', now())->get();
        return view('welcome', ['trains' => $todayTrains]);
    }
}
