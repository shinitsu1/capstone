<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PoliceController extends Controller
{
    public function index() {
        return view('dashboard');
    }

    public function landing(){
        return view('sidenav');
    }

}
