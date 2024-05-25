<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Navigation extends Controller
{
    public function sensors() {
        return view('Pages.sensors');
    }

    public function dashboard() {
        return view('Pages.dashboard');
    }

    public function controller() {
        return view('Pages.controller');
    }

    public function changepassword() {
        return view('Pages.changepassword');
    }

    public function logout() {
        Auth::logout();
        
        return redirect('/');
    }
}
