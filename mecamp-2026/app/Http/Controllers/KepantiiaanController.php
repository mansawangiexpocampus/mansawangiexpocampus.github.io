<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KepantiiaanController extends Controller
{
    public function index()
    {
        return view('pages.kepanitiaan');
    }
}