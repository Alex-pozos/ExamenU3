<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Personas;

class WelcomeController extends Controller
{
    public function index(){

        $personas = Personas::orderBy('id', 'desc')->paginate();

        return view('welcome', compact('personas'));

    }
}
