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
        // $credentials = $request->validate([
        //     'username' => ['required', 'string'],
        //     'password' => ['required', 'string'],
        // ]);

        // if (auth()->guard('web')->attempt($credentials)) {
        //     $request->session()->regenerate();
        //     return redirect()->intended('/pengalamans')->with([
        //         'success' => 'Login Berhasil',
        //     ]);
        // } else {
        //     return back()->with([
        //         'error' => 'Username atau password salah.',
        //     ]);
        // }

        // $credentitals = $request->validate([
        //     'email' => 'required|email',
        //     'password' => 'required'
        // ]);

        // if (Auth::attempt($credentitals)) {
        //      }
            //  $request->session()->regenerate();
            //  return redirect()->route('pengindex')->withSuccess('You have successfully logged in!');
            $credentials = request()->except(['_token']);            // dd(Hash::make($request->input('password')));
            

            $tes = Auth::attempt($credentials);
            dd($tes);

             if (Auth::attempt($credentials)) {
                $request->session()->regenerate();
                return redirect()->route('pengindex')->withSuccess('You have successfully logged in!');
            } else {
                echo "error";
            }
    
            // return back()->withErrors([
            //     'username' => 'Your provided credentials do not match in out records.',]);
    }
}
