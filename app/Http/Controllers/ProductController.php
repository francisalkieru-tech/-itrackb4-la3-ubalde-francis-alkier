<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
    $products = [
        ['name' => 'Argentina 150g', 'price' => 36, 'stock' => 40],
        ['name' => 'Megasardines', 'price' => 20, 'stock' => 30],
        ['name' => 'Pancit Canton', 'price' => 18, 'stock' => 35],
        ['name' => '1.5 coke', 'price' => 75, 'stock' => 8],
        ['name' => 'Red Horse 500ml', 'price' => 52, 'stock' => 10],
    ];
    
    return view('products.index', ['products' => $products]);
    }

}
