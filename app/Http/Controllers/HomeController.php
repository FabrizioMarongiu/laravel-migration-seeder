<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Box;

class HomeController extends Controller
{
    //HOME

    public function index(){

        $boxes = Box::all();
        // dump($boxes);

        return view('home', compact('boxes'));
    }
}
