<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClienteController extends Controller
{
    public function index()
    {
        // Retorna la vista del dashboard para Cliente
        return view('cliente.dashboard');
    }
}
