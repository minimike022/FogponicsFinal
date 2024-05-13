<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Authentication extends Controller
{
    public function Authenticate(Request $request) {
        $validatedData = $request->validate([
            "email"=> ["required"],
            "password"=> ["required"],
        ]);

        if(Auth::attempt($validatedData)) {
            if(Auth::user()->role == "user") {
                return redirect("/dashboard");
            }
        }else {
            return back()->with(['msg' => 'Username or password is incorrect. Please try again!']);
        }
    }

    

}
