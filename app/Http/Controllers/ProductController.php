<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Models\ProductImage;

class ProductController extends Controller
{

    public function index()
    {

        $products = Product::all();

        $categories = Category::where('status','active')->get();

        return view('admin.products',compact('products','categories'));

    }



public function store(Request $request)
{

$product = Product::create([
'name'=>$request->name,
'price'=>$request->price,
'category_id'=>$request->category_id,
'description'=>$request->description
]);

if($request->hasFile('images')){

foreach($request->file('images') as $image){

$imageName = time().'_'.$image->getClientOriginalName();

$image->move(public_path('product_images'),$imageName);

ProductImage::create([
'product_id'=>$product->id,
'name'=>$imageName
]);

}

}

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

$imageName = $product->image;

if($request->hasFile('image')){
$image = $request->file('image');
$imageName = time().'.'.$image->getClientOriginalExtension();
$image->move(public_path('product_images'),$imageName);
}

$product->update([
'name'=>$request->name,
'price'=>$request->price,
'category_id'=>$request->category_id,
'description'=>$request->description,
'image'=>$imageName
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

public function edit($id)
{
    $product = \App\Models\Product::find($id);

    return response()->json([
        'data' => $product
    ]);
}

}