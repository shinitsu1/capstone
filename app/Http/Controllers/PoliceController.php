<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PoliceController extends Controller
{
    public function index() {
        return view('dashboard2');
    }

    public function landing(){
        return view('sidenav');
    }

}
