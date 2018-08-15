<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudantController extends Controller
{
    //
    public function index() {
        return view('studants.info');
    }
}

