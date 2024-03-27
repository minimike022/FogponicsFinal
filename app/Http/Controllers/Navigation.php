<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Navigation extends Controller
{
    public function equipments() {
        return view('Pages/User.equipments');
    }

    public function dashboard() {
        return view('Pages/User.dashboard');
    }

    public function controller() {
        return view('Pages/User.controller');
    }

    public function changepassword() {
        return view('Pages/User.changepassword');
    }

    public function logout() {
        Auth::logout();
        
        return redirect('/');
    }
}
