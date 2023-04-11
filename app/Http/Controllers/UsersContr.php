<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UsersContr extends Controller
{

    function getData(Request $req)
    {
        return $req->input();
    }
}
