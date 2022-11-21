<?php

namespace App\Http\Controllers;

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
        $web_design = Creation::leftJoin('categories', 'creations.category_id', '=', 'categories.id')->select('categories.name as categories_name', 'creations.*')->where('categories.name', 'Web Design')->latest()->get();
        $app_design = Creation::leftJoin('categories', 'creations.category_id', '=', 'categories.id')->select('categories.name as categories_name', 'creations.*')->where('categories.name', 'App Design')->latest()->get();
        $ui_ux = Creation::leftJoin('categories', 'creations.category_id', '=', 'categories.id')->select('categories.name as categories_name', 'creations.*')->where('categories.name', 'UI/UX')->latest()->get();
        $desktop = Creation::leftJoin('categories', 'creations.category_id', '=', 'categories.id')->select('categories.name as categories_name', 'creations.*')->where('categories.name', 'Desktop')->latest()->get();

        return view('homepage.index', [
            'active' => 'home',
            'categories' => Category::all(),
            'web_designs' => $web_design,
            'app_designs' => $app_design,
            'ui_uxs' => $ui_ux,
            'desktops' => $desktop,
        ]);
    }
    public function creation(Creation $id)
    {
        // dd($id);
        return view('homepage.creation', [
            'active' => 'creation',
            'creation' => $id,
            'creations' => Creation::all(),
            'categories' => Category::all()
        ]);
    }
    public function allCreation()
    {
        // $allCreations = Creation::leftJoin('categories', 'creations.category_id', '=', 'categories.id')->select('categories.name as categories_name', 'creations.*')->paginate(6);
        $web_design = Creation::leftJoin('categories', 'creations.category_id', '=', 'categories.id')->select('categories.name as categories_name', 'creations.*')->where('categories.name', 'Web Design')->latest()->get();
        $app_design = Creation::leftJoin('categories', 'creations.category_id', '=', 'categories.id')->select('categories.name as categories_name', 'creations.*')->where('categories.name', 'App Design')->latest()->get();
        $ui_ux = Creation::leftJoin('categories', 'creations.category_id', '=', 'categories.id')->select('categories.name as categories_name', 'creations.*')->where('categories.name', 'UI/UX')->latest()->get();
        $desktop = Creation::leftJoin('categories', 'creations.category_id', '=', 'categories.id')->select('categories.name as categories_name', 'creations.*')->where('categories.name', 'Desktop')->latest()->get();

        return view('homepage.allCreation', [
            'active' => 'creation',
            // 'creations' => $allCreations,
            'web_designs' => $web_design,
            'app_designs' => $app_design,
            'ui_uxs' => $ui_ux,
            'desktops' => $desktop,
            // 'categories' => Category::all()
        ]);
    }
    public function myCreation()
    {
        $web_design = Creation::leftJoin('categories', 'creations.category_id', '=', 'categories.id')->select('categories.name as categories_name', 'creations.*')->where([['categories.name', 'Web Design'], ['user_id', Auth::id()]])->latest()->get();
        $app_design = Creation::leftJoin('categories', 'creations.category_id', '=', 'categories.id')->select('categories.name as categories_name', 'creations.*')->where([['categories.name', 'App Design'], ['user_id', Auth::id()]])->latest()->get();
        $ui_ux = Creation::leftJoin('categories', 'creations.category_id', '=', 'categories.id')->select('categories.name as categories_name', 'creations.*')->where([['categories.name', 'UI/UX'], ['user_id', Auth::id()]])->latest()->get();
        $desktop = Creation::leftJoin('categories', 'creations.category_id', '=', 'categories.id')->select('categories.name as categories_name', 'creations.*')->where([['categories.name', 'Desktop'], ['user_id', Auth::id()]])->latest()->get();
        // dd($web_design);
        return view('homepage.myCreation', [
            'active' => 'creation',
            'web_designs' => $web_design,
            'app_designs' => $app_design,
            'ui_uxs' => $ui_ux,
            'desktops' => $desktop,
            'categories' => Category::all()

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
        // dd($request->all());
        $validatedData =  $request->validate([
            'title' => 'required|max:255',
            'creator' => 'required|max:255',
            'technology' => 'required|max:255',
            'category_id' => 'required',
            'description' => 'required',
            'image' => 'required|file|max:10'
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
        dd($request->all());
        $rules = [
            'title' => 'required|max:255',
            'creator' => 'required|max:255',
            'technology' => 'required|max:255',
            'category_id' => 'required',
            'source_code' => 'required',
            'link_website' => 'required',
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