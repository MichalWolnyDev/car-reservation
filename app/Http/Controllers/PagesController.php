<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        // return /resources/views/welcome.blade.php
        return view('welcome');
    }
}
