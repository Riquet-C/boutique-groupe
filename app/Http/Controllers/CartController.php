<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{
    public function cart() : string {
        $date = ['message' => 'panier'];
        return view('cart', $date);
    }
}
