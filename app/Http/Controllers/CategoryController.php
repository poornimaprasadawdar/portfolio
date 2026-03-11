<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{

    public function index()
    {
        $categories = Category::get();
        return view('admin.categories',compact('categories'));
    }

    public function store(Request $request)
    {

        $request->validate([
            'name'=>'required',
            'status'=>'required'
        ]);

        Category::create([
            'name'=>$request->name,
            'status'=>$request->status
        ]);

        return redirect()->back()->with('success','Category Added Successfully');

    }

    public function update(Request $request)
    {

        $category = Category::find($request->id);

        $category->update([
            'name'=>$request->name,
            'status'=>$request->status
        ]);

        return redirect()->back()->with('success','Category Updated');

    }

    public function delete($id)
    {

        Category::find($id)->delete();

        return redirect()->back()->with('success','Category Deleted');

    }

}