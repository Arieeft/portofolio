<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function showLogin()
    {
        return view('login');
    }

    public function login(Request $request)
    {
            $credentials = request()->except(['_token']);     


            $tes = Auth::attempt($credentials);
            // dd($tes);

             if (Auth::attempt($credentials)) {
                $request->session()->regenerate();
                return redirect()->route('pengindex')->withSuccess('You have successfully logged in!');
            } else {
                echo "error";
            }
    }

    public function logout() {
        Auth::logout();
        return redirect('/')->with('success', 'You have been logged out.');
    }
}
