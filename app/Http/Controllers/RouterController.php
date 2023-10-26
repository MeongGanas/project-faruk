<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class RouterController extends Controller
{
    public function login_page()
    {
        return inertia::render('login');
    }
}
