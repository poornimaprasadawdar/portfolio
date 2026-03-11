<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function registerForm()
    {
        return view('auth.register');
    }

    public function register(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:100',
            'email' => 'required|email|unique:users,email',
            'phone' => 'required|digits:10',
            'password' => 'required|min:8',
            'photo' => 'required|image|mimes:jpg,jpeg,png|max:2048',
            'role' => 'required'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => $validator->errors()->first()
            ]);
        }

        $photoName = null;

        if ($request->hasFile('photo')) {
            $photoName = time().'_'.$request->file('photo')->getClientOriginalName();
            $request->file('photo')->move(public_path('images'), $photoName);
        }

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'password' => Hash::make($request->password),
            'photo' => $photoName,
            'role' => $request->role
        ]);


        return response()->json([
            'success' => true,
            'message' => 'Registration successful'
        ]);

    }



    public function loginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if ($validator->fails()) {

            return response()->json([
                'success' => false,
                'message' => $validator->errors()->first()
            ]);

        }


        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {

            $user = Auth::user();


            if ($user->role == 'admin') {

                return response()->json([
                    'success' => true,
                    'redirect' => '/admin/dashboard'
                ]);

            } else {

                return response()->json([
                    'success' => true,
                    'redirect' => '/'
                ]);

            }
        }

        return response()->json([
            'success' => false,
            'message' => 'Invalid email or password'
        ]);

    }

    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }

}