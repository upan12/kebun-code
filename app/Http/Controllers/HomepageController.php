<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Creation;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomepageController extends Controller
{
    public function index()
    {
        return view('homepage.index');
    }
    public function creation()
    {
        return view('homepage.addCreation', [
            'active' => 'creation',
            'categories' => Category::all()
        ]);
    }

    public function createCreation(Request $request)
    {
        // dd($request->all());
        Creation::create([
            'title' => $request->title,
            'creator' => $request->creator,
            'technology' => $request->technology,
            'description' => $request->description,
            'category_id' => $request->category,
            'user_id' =>  $request->user,
            'status' => '1',
        ]);

        return redirect('addCreation');
    }
}
