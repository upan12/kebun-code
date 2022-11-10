<?php

namespace App\Http\Controllers;

use App\Models\Creation;
use Illuminate\Http\Request;
use GuzzleHttp\Promise\Create;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\StoreCreationRequest;
use App\Http\Requests\UpdateCreationRequest;

class DashboardCreationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $creation1 = DB::select("select * from creations where status = '1'");
        $creation2 = DB::select("select * from creations where status = '2'");
        $creation3 = DB::select("select * from creations where status = '3'");
        return view('dashboard.creation', [
            'active' => 'creation',
            'creations' => Creation::all(),
            'creation1' => $creation1,
            'creation2' => $creation2,
            'creation3' => $creation3
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('homepage.creation');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreCreationRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // return $request->file('image')->store('creation-images');
        $validateData = $request->validate([
            'title' => 'required|max:255',
            'name' => 'required|max:255',
            'technology' => 'required|max:255',
            'description' => 'required|max:255',
            'category' => 'required',
            'image' => 'image|file|max:1024'
        ]);

        if ($request->file('image')) {
            $validateData['image'] = $request->file('image')->store('creation-images');
            }

        Creation::create($validateData);

        return redirect('/admin/creation')->with('primary', 'Creation has been Updated!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Creation  $creation
     * @return \Illuminate\Http\Response
     */
    public function show(Creation $creation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Creation  $creation
     * @return \Illuminate\Http\Response
     */
    public function edit(Creation $creation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCreationRequest  $request
     * @param  \App\Models\Creation  $creation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Creation $creation)
    {
        $rules = [
            'title' => 'required|max:255',
            'name' => 'required|max:255',
            'technology' => 'required|max:255',
            'description' => 'required|max:255',
            'category' => 'required',
            'image' => 'image|file|max:1024'
        ];

        $validateData = $request->validate($rules);

        if ($request->file('image')) {
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $validateData['image'] = $request->file('image')->store('creation-images');
        }

        Creation::where('id', $creation->id)
            ->update($validateData);

        return redirect('/admin/creation')->with('primary', 'Creation has been Updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Creation  $creation
     * @return \Illuminate\Http\Response
     */
    public function destroy(Creation $creation)
    {
        // dd($creation->id);
        if ($creation->image) {
            Storage::delete($creation->image);
        }
        Creation::destroy($creation->id);
        return redirect('/admin/creation')->with('danger', 'Creation has been Deleted!');
    }

    public function check_creation(Creation $creation)
    {
        Creation::where('id', $creation->id)
            ->update([
                'status' => '2'
            ]);

        return redirect('/admin/creation')->with('success', 'Confirmed');
    }
    public function disable_creation(Creation $creation)
    {
        Creation::where('id', $creation->id)
            ->update([
                'status' => '3'
            ]);

        return redirect('/admin/creation')->with('success', 'Disable');
    }
    public function active_creation(Creation $creation)
    {
        Creation::where('id', $creation->id)
            ->update([
                'status' => '2'
            ]);

        return redirect('/admin/creation')->with('success', 'Active');
    }
}