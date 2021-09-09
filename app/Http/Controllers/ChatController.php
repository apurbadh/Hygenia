<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChatController extends Controller
{


     public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $req)
    {

        return view("layouts.index");
    }

    public function create(Request $req)
    {

    }

}
