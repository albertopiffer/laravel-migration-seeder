<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Train;
use Illuminate\Http\Request;

class TrainsController extends Controller
{

    public function homepage()
    {

        $trains = Train::all();

        $trains = $trains->where('orario_partenza', '>', now());

        return view('welcome', ['trains' => $trains]);
    }
}
