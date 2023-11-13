<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use PhpParser\Node\Stmt\Return_;

class UserController extends Controller
{
    // public function index(){
    //     return view('dashboard');
    // }

    public function back(){
        return view('Admin_Landing');
    }

    public function show($id){
        return $id;
    }

    public function login(){
        return view('auth.login');
    }

    public function register(){
        return view('users.register');
    }

    public function store(Request $request){
        $validated = $request->validate([
             "name" => ['required', 'min:4'],
             "email" => ['required', 'email', Rule::unique('users', 'email')],
             "password" => 'required|confirmed|min:6'
        ]);

        $validated['password'] = bcrypt($validated['password']);

        $user = User::create($validated);

        auth()->login($user);

        return redirect('/');
     }

     public function process(Request $request){
        $validated = $request->validate([
            "email" => ['required', 'email'],
            'password' => 'required'
        ]);

        if(auth()->attempt($validated)){
        $request->session()->regenerate();

        return redirect('/')->with('message', 'Welcome Back! ');
        }

        return back()->withErrors(['email' => 'Login Failed'])->onlyInput('email');
    }

    public function logout(Request $request) {
        auth()->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login')->with('message', 'Logout Successful');
    }
}

