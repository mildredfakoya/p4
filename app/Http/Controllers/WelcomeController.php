<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app;

class WelcomeController extends Controller
{
    Public function index()
    {
        return view('welcome');

    }
}
