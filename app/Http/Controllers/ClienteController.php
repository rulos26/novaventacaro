<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ClienteController extends Controller
{
    public function index()
    {
        // Retorna la vista del dashboard para Cliente
        
        $user = Auth::user(); // Equivalente a auth()->user()
        $roles = $user->roles->pluck('name');
        //dd($roles);
        return view('cliente.dashboard', compact('roles'));
    }
}
