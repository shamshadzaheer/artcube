<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Show Contact Site Page
     *
     * @return view
     */
    public function index()
    {
        return view('contact.index');
    }
}
