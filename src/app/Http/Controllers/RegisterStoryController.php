<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterStoryController extends Controller
{
    public function __construct()
    {

    }

    public function index()
    {
        return view('registerStory');
    }

    public function register(Request $request) {
        $hoge = $request->all();
    }
}
