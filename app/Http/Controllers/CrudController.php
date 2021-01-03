<?php

namespace App\Http\Controllers;

class CrudController extends Controller
{
    public function index()
    {
        return \view('crud.index');
    }
}
