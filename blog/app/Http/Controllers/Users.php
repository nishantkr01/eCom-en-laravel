<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Users extends Controller
{
    //
    public function index($user,$age)
    {
        // echo $user;
        // echo "Hello from Controller";
        return ["name"=>$user, "age"=>$age];
    }
}
