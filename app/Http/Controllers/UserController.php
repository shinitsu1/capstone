<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use PhpParser\Node\Stmt\Return_;

class UserController extends Controller
{
    public function index(){
        return 'Hello From UserController';
    }

    public function show($id){
        return $id;
    }

    public function login(){
        return view('users.login');
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

        return 'Account created Successfully!';
     }
}

