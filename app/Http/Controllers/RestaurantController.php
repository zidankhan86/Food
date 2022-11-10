<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RestaurantController extends Controller
{
    public function list(){

        return view('backend.pages.restaurant.restaurant');
    }
    public function edit_list(){

        return view('backend.pages.restaurant.edit_restaurant');
    }
}
