<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public int $a = 4;
    public int $b = 8;

    public function show1()
    {
        $a = $this->a;
        $b = $this->b;
        $mas=[
            'potato1', 'poptato1', 'popotato1', 'papotota1', 'papatoto1'
        ];
        return view('second', compact('a','b','mas'));
    }
}
