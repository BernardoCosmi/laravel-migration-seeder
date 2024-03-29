<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Train;

class TrainController extends Controller
{
    public function index(){
        $trains = Train::where('departure_time', '>=', now())->get();
        return view('pages.welcome', compact('trains'));
    }
}
