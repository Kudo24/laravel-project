<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class contact extends Controller
{
    function InfoView($name)
    {

        return view('contact', ['name' => $name]);
    }
};
