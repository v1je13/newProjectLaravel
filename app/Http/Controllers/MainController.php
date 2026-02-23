<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class MainController extends Controller
{
   
    public $products = [
        ['id' => 1, 'title' => 'Blackberry', 'price' => 700, 'path' => 'blackberry.png'],
        ['id' => 2, 'title' => 'Iphone 4s', 'price' => 100, 'path' => 'iph4.png'],
        ['id' => 3, 'title' => 'Iphone 5c', 'price' => 1200, 'path' => 'iph5c.png'],
        ['id' => 4, 'title' => 'Iphone 5s', 'price' => 1500, 'path' => 'iph5s.png'],
        ['id' => 5, 'title' => 'Iphone', 'price' => 19000, 'path' => 'Iphone.png'],
        ['id' => 6, 'title' => 'PlayStation 2', 'price' => 12500, 'path' => 'ps2.png'],
        ['id' => 7, 'title' => 'PlayStation 3', 'price' => 14500, 'path' => 'ps3.png'],
        ['id' => 8, 'title' => 'Samsung', 'price' => 15000, 'path' => 'samsungs.png'],
        ['id' => 9, 'title' => 'Sony Walkman', 'price' => 16000, 'path' => 'walkman.png'],
        ['id' => 10, 'title' => 'Xbox 360', 'price' => 18000, 'path' => 'xbox.png'],
    ];

    
    public function showIndex()
    {
        return view('home');
    }

    
    public function showArray()
    {
        return view('array', ['array' => $this->products]);
    }


    public function shuffleArray()
    {
        $shuffled = $this->products;
        shuffle($shuffled);
        return view('array', ['array' => $shuffled]);
    }

    
    public function sortArray()
    {
        $sorted = $this->products;
        
        usort($sorted, function($a, $b) {
            return $a['price'] <=> $b['price'];
        });
        
        return view('array', ['array' => $sorted]);
    }

  
    public function filterArray()
    {
       $filtered = []; 
        foreach ($this->products as $product) {
            if ($product['price'] > 1000) {
                $filtered[] = $product;
            }
        }
        return view('array', ['array' => $filtered]);
    }
}