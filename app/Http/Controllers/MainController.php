<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function showIndex()
    {
            return view('home');
    }

    public function showArray()
    {
        $array = [
['id' => 1, 'title' => 'f40', 'price' => 500, 'path' => 'f40.jpg'],
['id' => 2, 'title' => 'enzo', 'price' => 500, 'path' => 'ferrarienzo.jpg'],
['id' => 3, 'title' => 'kr', 'price' => 500, 'path' => 'kr.jpg'],
['id' => 4, 'title' => 'ph', 'price' => 500, 'path' => 'ph.jpg'],

];
    return view('array', compact('array'));
    }
}
