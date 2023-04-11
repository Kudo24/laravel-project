<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Blade;

class product extends Controller
{
    function productList()
    {
        $totalProduct = 20;
        return blade::render('<h1>Product list</h1>');
        return "product list";
    }

    function addProduct()
    {
        return "product is added";
    }

    function updateProduct()
    {
        return "product is updated";
    }
}
