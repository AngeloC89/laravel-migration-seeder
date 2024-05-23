<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Train;

class TrainController extends Controller
{
    public function index()
    {

        //$trains = Train::all();
        //dd($trains);
        $trains = Train::where("ora_di_partenza", '>=', '16:10')->get();
        return view('home', compact('trains'));
    }


}
