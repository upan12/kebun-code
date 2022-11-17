<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Creation;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // dd(Creation::where('status', '3')->get());
        // dd(count(Creation::get()));



        return view('dashboard.index', [
            'active' => 'home',
            'count_user' => count(User::where('status', '!=', '4')->get()),
            'count_creation' => count(Creation::get()),
            'count_unveriUser' => count(User::where('status', '1')->get()),
            'count_veriUser' => count(User::where('status', '2')->get()),
            'count_disableUser' => count(User::where('status', '3')->get()),
            'count_unveriCreation' => count(Creation::where('status', '1')->get()),
            'count_veriCreation' => count(Creation::where('status', '2')->get()),
            'count_disableCreation' => count(Creation::where('status', '3')->get())

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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}