<?php

namespace App\Http\Controllers;

class BasketController extends Controller
{
    public function __invoke()
    {
        return view('basket');
    }
}
