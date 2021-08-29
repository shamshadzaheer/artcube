<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Admin Dashboard
     *
     * @return view
     */
    public function index(Request $request)
    {
        $user = auth()->user();

        return view('admin.index', compact('user'));
    }
}
