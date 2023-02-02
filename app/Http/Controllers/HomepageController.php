<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Category;
use App\Models\Creation;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class HomepageController extends Controller
{
    public function index()
    {
        $allCreations = Creation::leftJoin('categories', 'creations.category_id', '=', 'categories.id')->select('categories.name as categories_name','categories.id as categories_id', 'creations.*')->where( [['status', '2']])->latest()->get();

        return view('homepage.index', [
            'active' => 'home',
            'categories' => Category::all(),
            'allCreations' => $allCreations
        ]);
    }
    public function creation(Creation $id)
    {
        $creation = Creation::leftJoin('users', 'creations.user_id', '=', 'users.id')->leftJoin('categories', 'creations.category_id', '=', 'categories.id')->select('categories.name as categories_name', 'creations.*', 'users.name as user_name')->where([['creations.id', $id->id]])->first();

        // dd($creation);
        return view('homepage.creation', [
            'active' => 'creation',
            'creation' => $creation,
            // 'creations' => Creation::all(),
            // 'categories' => Category::all()
        ]);
    }
    public function allCreation()
    {
        $allCreations = Creation::leftJoin('categories', 'creations.category_id', '=', 'categories.id')->select('categories.name as categories_name','categories.id as categories_id', 'creations.*')->where( [['status', '2']])->latest()->get();

        return view('homepage.allCreation', [
            'active' => 'creation',
            'categories' => Category::all(),
            'allCreations' => $allCreations
        ]);
    }
    public function myCreation()
    {
        $allCreations = Creation::leftJoin('categories', 'creations.category_id', '=', 'categories.id')->select('categories.name as categories_name','categories.id as categories_id', 'creations.*')->where( [['user_id', Auth::id()]])->latest()->get();

        // dd($web_design);
        return view('homepage.myCreation', [
            'active' => 'creation',
            'categories' => Category::all(),
            'allCreations' => $allCreations

        ]);
    }
    public function profile(User $id)
    {
        $user = User::select()->where('id', '=', $id->id)->first();
        // dd($id->id);
        return view('homepage.profile', [
            'active' => 'creation',
            'user' => $user
        ]);
    }
    public function addCreation()
    {
        return view('homepage.addCreation', [
            'active' => 'creation',
            'categories' => Category::all()
        ]);
    }
    public function aboutUs()
    {
        return view('homepage.about', [
            'active' => 'aboutUs',
        ]);
    }

    public function createCreation(Request $request)
    {
        // dd($request);
        $validatedData =  $request->validate([
            'title' => 'required|max:255',
            'technology' => 'required|max:255',
            'category_id' => 'required',
            'description' => 'required',
            'image' => 'required|file|max:8000'
        ]);

        if ($request->file('image')) {
            $validatedData['image'] = $request->file('image')->store('creation-images');
        }
        $validatedData['source_code'] = $request->source_code;
        $validatedData['link_website'] = $request->link_website;
        $validatedData['user_id'] = $request->user_id;
        $validatedData['status'] = $request->status;

        Creation::create($validatedData);

        return redirect('/myCreation')->with('createSuccess', 'createSuccess');
    }
    public function updateCreation(Request $request, Creation $creation)
    {
        // dd($request->all());
        $rules = [
            'title' => 'required|max:255',
            'technology' => 'required|max:255',
            'category_id' => 'required',
            'description' => 'required|max:255',
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

        return redirect('/myCreation')->with('updateSuccess', 'Creation has been Updated!');
    }
    public function deleteCreation(Creation $creation)
    {
        // dd($creation, $creation->all());
        if ($creation->image) {
            Storage::delete($creation->image);
        }
        Creation::destroy($creation->id);
        return redirect('/myCreation')->with('deleteSuccess', 'Creation has been Deleted!');
    }
}