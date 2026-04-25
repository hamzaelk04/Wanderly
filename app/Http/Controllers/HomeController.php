<?php

namespace App\Http\Controllers;

use App\Models\Monument;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $monuments = Monument::limit(3)->get();

        return view('home', compact('monuments'));
    }
}
