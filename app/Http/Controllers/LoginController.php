<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function login()
    {
        return view('homepage.login');
    }

    public function authenticate(Request $request)
    {
        // dd($request->all());
        // $userLogin = DB::table('users')->where('nisn', $request->nisn);
        $credentials = $request->validate([
            'nisn' => 'required',
            'password' => 'required',
        ]);
        if (User::where('nisn', $credentials['nisn'])->first()?->status == 4 && Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect('/admin')->with('loginSuccess', 'Login success');
        } elseif (User::where(
            [
                ['nisn', $credentials['nisn']]
            ])->first()?->status != 2) {
            return back()->with('loginError', 'Account unverified. Please contact admin');
        } elseif (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect('/')->with('loginSuccess', 'Login success');
        } else 
        {return back()->with('loginError', 'Login failed!');}
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }

    public function register()
    {
        return view('homepage.register');
    }

    public function Registration(Request $request)
    {
        // return $request->all();
        $validatedData = $request->validate([
            'name' => 'required|min:3|max:15',
            'nisn' => 'required|numeric|min:8|max:12|unique:users',
            // 'username' => 'required|min:3|max:255|unique:users',
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:8|max:255',
        ]);
        // dd('registrasi berhasil');

        // $validatedData['password'] = bcrypt($validatedData['password']);
        $validatedData['password'] = Hash::make($validatedData['password']);
        $validatedData['status'] = '1';
        User::create($validatedData);
        // $request->session()->flash('success', 'Registration successful!');
        return redirect('/login')->with('loginSuccess', 'Registration successful!');
    }
}