<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Train;
use Illuminate\Http\Request;

class TrainsController extends Controller
{
    public function homepage()
    {

        $trains = Train::where('orario_partenza', '>=', now())
            ->whereDate('orario_partenza', '=', date('Y-m-d'))
            ->get();

        //dd($trains);

        return view('welcome', ['trains' => $trains]);
    }
}
