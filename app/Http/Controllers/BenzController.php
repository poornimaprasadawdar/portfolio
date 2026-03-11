<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BenzController extends Controller
{
    public function warranty()
    {
        return view('mercedes.warranty');
    }
}