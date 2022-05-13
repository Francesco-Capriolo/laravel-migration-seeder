<?php

namespace App\Http\Controllers;

use App\Train;
use Carbon\Carbon;
use Illuminate\Http\Request;

class TrainsController extends Controller
{
    public function index(){
        $trains=Train::where('orarioDiPartenza', '>=' ,Carbon::today())->get();

        return view('trains.index',["trains"=>$trains]);
    }

}
