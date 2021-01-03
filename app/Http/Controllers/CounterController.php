<?php

namespace App\Http\Controllers;

class CounterController extends Controller
{
    public function index()
    {
        return \view('counter.index');
    }
}
