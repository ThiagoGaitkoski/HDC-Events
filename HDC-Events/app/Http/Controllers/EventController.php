<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index(){
        return view('welcome');
    }

    public function create(){
        return view('events.create');
    }

    public function login(){
        return view('login.login');
    }

    public function register(){
        return view('login.register');
    }
}
