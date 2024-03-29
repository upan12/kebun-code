<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function login()
    {
        return view('homepage.login', ['active' => '']);
    }

    public function authenticate(Request $request)
    {
        // dd($request->all());
        // $userLogin = DB::table('users')->where('nisn', $request->nisn);
        $credentials = $request->validate([
            'nisn' => 'required|numeric|min_digits:8',
            'password' => 'required|min:8',
        ]);
        if (User::where('nisn', $credentials['nisn'])->first()?->status == 4 && Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect('/admin')->with('loginSuccess', 'Login success');
        } elseif (User::where(
            [
                ['nisn', $credentials['nisn']]
            ]
        )->first()?->status != 2) {
            return back()->with('loginError', 'Account unverified. Please contact admin');
        } elseif (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect('/')->with('loginSuccess', 'Login success');
        } else {
            return back()->with('loginError', 'Login failed!');
        }
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
        return view('homepage.register', [
            'active' => ''
        ]);
    }

    public function Registration(Request $request)
    {
        // return $request->all()
        $code = strtoupper(substr($request->name, 0, 3) . substr($request->nisn, -3) . 'KCD' . Str::random(3) . substr($request->no_hp, -1, 2));
        // dd($code);
        $validatedData = $request->validate([
            'name' => 'required|min:5|max:15',
            'nisn' => 'required|numeric|min_digits:8|max_digits:12|unique:users',
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:8|max:255',
            'no_hp' => 'required|numeric|min_digits:10|max_digits:13',
            'description' => 'required|min:20|max:255',
            'image' => 'image|file|max:8000',
        ]);
        // dd('registrasi berhasil');
        if ($request->file('image')) {
            $validatedData['image'] = $request->file('image')->store('user-profile');
        }
        $validatedData['facebook'] = $request->facebook;
        $validatedData['instagram'] = $request->instagram;
        $validatedData['github'] = $request->github;
        $validatedData['code'] = $code;

        // $validatedData['password'] = bcrypt($validatedData['password']);
        $validatedData['password'] = Hash::make($validatedData['password']);
        $validatedData['status'] = '1';
        User::create($validatedData);
        // $request->session()->flash('success', 'Registration successful!');
        return redirect('/login')->with('loginSuccess', 'Registration successful!');
    }
}
