<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\User; 
use App\Models\Product;
use App\Models\Category;


class AdminController extends Controller
{
    // Show admin dashboard
    public function dashboard()
    {
        // Hide admin users
        $users = DB::table('users')
                    ->where('role', '!=', 'admin')
                    ->get();
                    


        return view('admin.dashboard', compact('users'));
    }

    // Add user
    public function store(Request $request)
{
    $user = new User();
    $user->name = $request->name;
    $user->email = $request->email;
    $user->password = Hash::make($request->password);
    $user->role = 'user';

    if ($request->hasFile('photo')) {

        $image = $request->file('photo');

        $filename = time().'.'.$image->getClientOriginalExtension();

        // move image to public/images folder
        $image->move(public_path('images'), $filename);

        $user->photo = $filename;
    }

    $user->save();

    return redirect()->back()->with('success','User Added Successfully');
}
    // Update user
    public function update(Request $request)
    {
        $user = User::find($request->id);

        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->role = $request->role;

        $user->save();

        return redirect()->back()->with('success','User updated successfully');
    }

    // Delete user
    public function delete($id)
    {
        DB::table('users')->where('id',$id)->delete();

        return redirect()->back()->with('success','User Deleted Successfully');
    }

    public function productsList()
{

$products = Product::join('categories','products.category_id','=','categories.id')

->select(
'products.id',
'products.name',
'products.price',
'products.description',
'categories.name as category'
)

->get();

return view('admin.products',compact('products'));

}

public function deleteProduct($id)
{

Product::find($id)->delete();

return redirect()->back()->with('success','Product Deleted');

}
}