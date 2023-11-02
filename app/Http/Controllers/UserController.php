<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
}

