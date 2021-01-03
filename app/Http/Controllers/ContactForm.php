<?php

namespace App\Http\Controllers;

class ContactForm extends Controller
{
    public function index()
    {
        return \view('contact_form.index');
    }
}
