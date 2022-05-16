<?php

namespace App\Http\Controllers;

use App\Trains;
use Carbon\Carbon;

class TrainsController extends Controller
{
    public function index(){
        $trains=Trains::where('orarioDiPartenza', '>=' ,Carbon::today())->get();

        return view('trains.index',["trains"=>$trains]);
    }

    public function show($id){
    }

}
