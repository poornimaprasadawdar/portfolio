<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MercedesController extends Controller
{
    public function index()
    {
        return view('mercedes.home');
    }
}