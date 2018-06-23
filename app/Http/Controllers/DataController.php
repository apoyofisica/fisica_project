<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Support\Facades\Auth;

class DataController extends Controller
{
    public function getDataUser(){
        if (Auth::check()){
            $session_data = User::find(\auth()->user()->id);
            view()->share('session_data', $session_data);
        }
    }
}
