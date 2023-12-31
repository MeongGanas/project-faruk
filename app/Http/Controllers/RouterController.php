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
    public function home()
    {
        return inertia::render('home');
    }
    public function lists()
    {
        return inertia::render('lists');
    }
    public function setting()
    {
        return inertia::render('setting');
    }
    public function adminList()
    {
        return inertia::render('adminList');
    }
    public function participantList()
    {
        return inertia::render('participantList');
    }
}
