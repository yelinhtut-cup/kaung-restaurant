<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\AddItem;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class CustomAuthController extends Controller
{
    public function showLoginForm(){
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');
        $user = User::where('email', $credentials['email'])->get('name')->first();
        $userRole = User::where('email', $credentials['email'])->value('role');

        $existItem = AddItem::all()->toArray();
        if (Auth::attempt($credentials)) {
            // return view('index',[
            //     'userName' => $user
            // ]);
            if( $userRole == "user" ){
                return view('index',[
                'userName' => $user
                ]);
            }
            elseif( $userRole == "admin" ){
                return view('menus.cuisine_menu',[
                    'item' => $existItem
                ]);
            }
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }

    public function showRegisterForm(){
        return view('auth.register');
    }

    public function register(Request $request){
         // Validate input
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);
        // Insert data into the users table
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        return redirect()->route('login')->with('success', 'Registration successful!');
    }
}
