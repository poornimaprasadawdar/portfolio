<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductDetailsController extends Controller
{

    public function show($id)
    {

        // Find product by ID
        $product = Product::find($id);

        // If product not found show 404 page
        if(!$product){
            abort(404);
        }

        // Send product to blade view
        return view('mercedes.product-details', compact('product'));

    }

}