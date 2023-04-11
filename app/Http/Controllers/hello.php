<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class hello extends Controller
{
    function view($name)
    {
        return view('hello', ['name' => $name]);
    }
}
