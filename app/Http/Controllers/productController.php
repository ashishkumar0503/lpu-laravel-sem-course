<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class productController extends Controller
{
    function showProducts() {
        $products = [
            ["id"=> 1, "name" => "Dell laptop","desc" => "Laptop", "price" => "60K"],
            ["id"=> 2, "name" => "Asus laptop","desc" => "Laptop", "price" => "70K"],
            ["id"=> 3, "name" => "Lenovo laptop","desc" => "Laptop","price" => "55K"],
    ];
    return view('productlist', compact('products'));
    }
}
