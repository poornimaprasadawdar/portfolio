<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;

class ProductController extends Controller
{

public function index()
{

$products = Product::all();

/* Only ACTIVE categories will be shown in dropdown */
$categories = Category::where('status','active')->get();

return view('admin.products',compact('products','categories'));

}



public function store(Request $request)
{

Product::create([

'name'=>$request->name,

'price'=>$request->price,

'category_id'=>$request->category_id,

'description'=>$request->description

]);

return redirect()->back()->with('success','Product Added');

}



public function delete($id)
{

Product::find($id)->delete();

return redirect()->back()->with('success','Product Deleted');

}

public function update(Request $request)
{

$product = Product::find($request->id);

$product->update([

'name'=>$request->name,
'price'=>$request->price,
'category_id'=>$request->category_id,
'description'=>$request->description

]);

return redirect()->back()->with('success','Product Updated');

}

public function toggleStatus($id)
{
$category = Category::find($id);

if($category->status == 'active'){
$category->status = 'inactive';
}else{
$category->status = 'active';
}

$category->save();

return response()->json(['success'=>true]);
}

}