<?php

namespace App\Http\Controllers;

use App\Trains;
use Carbon\Carbon;

class TrainsController extends Controller
{
    public function index(){
        $trainsModel = new Trains();
        $trains = $trainsModel::orderBy('departureTime', 'asc')->paginate(12);
        $time=Trains::where('departureTime', '>=' ,Carbon::today())/* ->paginate(15) */->get();

        return view('trains.index',["trains"=>$trains,"time"=>$time]);
    }

    public function show($id){
        $train = Trains::findOrFail($id);

        return view('trains.show', ['train' => $train]);
    }

}
