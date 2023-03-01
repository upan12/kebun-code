<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = DB::select("select * from users where status = '1'");
        $user2 = DB::select("select * from users where status = '2'");
        $user3 = DB::select("select * from users where status = '3'");
        return view('dashboard.user', [
            'active' => 'user',
            'user' => User::all(),
            'users' => $users,
            'user2' => $user2,
            'user3' => $user3
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'name' => 'required|max:255',
            'nisn' => 'required|max:255',
            'email' => 'required|max:255',
        ]);

        User::create($validateData);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $rules = [
            'name' => 'required|max:255',
            'nisn' => 'required|max:255',
            'email' => 'required|max:255',
        ];

        
        $validateData = $request->validate($rules);

        User::where('id', $user->id)
            ->update($validateData);

        return redirect('/admin/user')->with('primary', 'User has been Updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        // dd($user->id);
        User::destroy($user->id);
        return redirect('/admin/user');
    }

    public function check_user(User $user)
    {
        User::where('id', $user->id)
            ->update([
                'status' => '2'
            ]);

        return redirect('/admin/user')->with('success', 'Confirmed');
    }
    public function disable_user(User $user)
    {
        User::where('id', $user->id)
            ->update([
                'status' => '3'
            ]);

        return redirect('/admin/user')->with('success', 'Disable');
    }
    public function active_user(User $user)
    {
        User::where('id', $user->id)
            ->update([
                'status' => '2'
            ]);

        return redirect('/admin/user')->with('success', 'Active');
    }
}
