<?php

namespace App\Http\Controllers;

use App\Models\Reto;
use Illuminate\Http\Request;

class RetoController extends Controller
{
    public function index()
    {
        $retos = Reto::all();
        return view('retos.index', compact('retos'));
    }
}
