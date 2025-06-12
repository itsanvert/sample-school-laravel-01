<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function displayProduct()
    {
        $products = [ // Changed variable name to 'products' for clarity
            ['id' => 1, 'name' => 'Laptop', 'price' => 1500, 'quantity' => 2, 'img' => asset('img/laptop.webp'), 'desc' =>
            'A hight performance laptop suitable for gaming and professional work.'],
            ['id' => 2, 'name' => 'Notebook', 'price' => 200, 'quantity' => 20, 'img' => asset('img/notebook.jpg'),'desc' =>
            'A hight performance laptop suitable for gaming and professional work.'],
            ['id' => 3, 'name' => 'Deskstop', 'price' => 300, 'quantity' => 30, 'img' => asset('img/laptop.webp'),'desc' =>
            'A hight performance laptop suitable for gaming and professional work.'],
        ];

        return view('products', compact('products')); // Pass 'products' instead of 'product'
    }
}
