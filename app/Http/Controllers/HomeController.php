<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Clothe;

class HomeController extends Controller
{
    public function index()
    {
        $vestiti = Clothe::all();
        $data = [

            'all_vestiti' => $vestiti

        ];
        return view('home')->with($data);
    }
}
