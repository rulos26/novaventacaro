<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        // Retorna la vista del dashboard para Admin
        return view('admin.dashboard');
    }
}
