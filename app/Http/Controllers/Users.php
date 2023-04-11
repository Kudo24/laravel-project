<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Users extends Controller
{
    public function index($name)
    {
        echo $name;
        echo "hello from controller USers";
    }
}
