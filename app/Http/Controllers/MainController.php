<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\MainRequest;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\Main;

class MainController extends Controller
{
    use AuthenticatesUsers;

    protected $redirectTo = '/main';

    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index(){
        return view('layouts.main');
    }

    public function store(MainRequest $request) {
        $userData = $request->all();
        $validate = $request->validated();
    }

}

