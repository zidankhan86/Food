<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function master(){
        return view('backend.pages.dashboard');
    }
}
