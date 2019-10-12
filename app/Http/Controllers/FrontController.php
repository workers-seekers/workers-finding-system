<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class FrontController extends Controller
{
    public function countcandidate(){

        $countcandidate = User::count('id');
        return view('/home',compact('countcandidate'));
    }
}
