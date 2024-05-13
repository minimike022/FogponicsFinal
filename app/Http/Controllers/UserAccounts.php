<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class UserAccounts extends Controller
{
    public function createAccount(Request $request) {
        $validate_accounts = $request->validate([
            "email" => ["required"],
            "password" => ["required"]
        ]);

        $hashed_password = bcrypt($validate_accounts["password"]);
        $validate_accounts["password"] = $hashed_password;
        
        User::create($validate_accounts);

    }
    public function updatePassword(Request $request) {
        $validate_password = $request->validate([
            "old_password" => ["required"],
            "new_password" => ["required", "min:8"],
            "confirm_password" => ["required", "min:8"],
        ]);
    
        if(!Hash::check($validate_password['old_password'], auth()->user()->password)) {
            return redirect()->back()->with('error', 'not Matched');
        }
        else {
            if($validate_password['old_password'] == $validate_password['new_password']) {
                return redirect()->back()->with(['error' => 'New password cannot be the same as the old password']);
            }
            else {
                if($validate_password['new_password'] == $validate_password['confirm_password']) {
                    $user = User::findOrFail(Auth::user()->id);
                    $new_password = bcrypt($validate_password['new_password']);

                    $user->update([
                        'password' => $new_password,
                    ]);
                    return redirect()->route('dashboard')->with('msg', "Password Changed Successfully");
                }
                else {  
                    return redirect()->back()->with('error', 'Please confirm your new password!');
                }
            }
        }
        
    }
}
