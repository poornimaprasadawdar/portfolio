<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\File; 
use App\Models\User; 
use App\Models\Product;
use App\Models\Category;

class AdminController extends Controller
{
    public function dashboard()
    {
        
        $users = User::where('role', '!=', 'admin')->get();
        return view('admin.dashboard', compact('users'));
    }

    public function store(Request $request)
    {
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone; 
        $user->password = Hash::make($request->password);
        $user->role = 'user';

        if ($request->hasFile('photo')) {
            $image = $request->file('photo');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images'), $filename);
            $user->photo = $filename;
        }

        $user->save();
        return redirect()->back()->with('success', 'User Added Successfully');
    }

    public function update(Request $request)
    {
        $user = User::find($request->id);

        if (!$user) {
            return redirect()->back()->with('error', 'User not found');
        }

        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->role = $request->role;

        if ($request->hasFile('photo')) {
            
            if ($user->photo && File::exists(public_path('images/' . $user->photo))) {
                File::delete(public_path('images/' . $user->photo));
            }

            $image = $request->file('photo');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images'), $filename);
            
            $user->photo = $filename;
        }

        $user->save();
        return redirect()->back()->with('success', 'User updated successfully');
    }

    public function delete($id)
    {
        $user = User::find($id);

        if ($user) {
            
            if ($user->photo && File::exists(public_path('images/' . $user->photo))) {
                File::delete(public_path('images/' . $user->photo));
            }
            $user->delete();
        }

        return redirect()->back()->with('success', 'User Deleted Successfully');
    }

    public function productsList()
    {
        $products = Product::join('categories', 'products.category_id', '=', 'categories.id')
            ->select(
                'products.id',
                'products.name',
                'products.price',
                'products.description',
                'categories.name as category'
            )
            ->get();

        return view('admin.products', compact('products'));
    }

    public function deleteProduct($id)
    {
        $product = Product::find($id);
        if ($product) {
            $product->delete();
        }

        return redirect()->back()->with('success', 'Product Deleted');
    }
}