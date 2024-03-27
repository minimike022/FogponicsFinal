<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use app\Models\User;

class CoreController extends Controller
{
    public function updatePassword(Request $request) {
        $validatePassword = $request->validate([
            "oldPassword" => ["required"],
            "newPassword" => ["required"],
            "confirmPassword" => ["required"],
        ]);
    
        if(!Hash::check($validatePassword['oldPassword'], auth()->user()->password)) {
            return redirect()->back()->with('data', 'not Matched');
        }
        else {
            if($validatePassword['oldPassword'] == $validatePassword['newPassword']) {
                return redirect()->back()->with(['data' => 'New password cannot be the same as the old password']);
            }
            else {
                if($validatePassword['newPassword'] == $validatePassword['confirmPassword']) {
                    $user = User::findOrFail(Auth::user()->id);
                    $newPassword = bcrypt($validatePassword['newPassword']);

                    $user->update([
                        'password' => $newPassword,
                    ]);
                    return redirect()->route('dashboard')->with('msg', "Password Changed Successfully");
                }
                else {  
                    return redirect()->back()->with('data', 'Please confirm your new password!');
                }
            }
        }
        
    }
}
