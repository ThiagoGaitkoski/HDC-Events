<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Event; //Chamada dos eventos

class EventController extends Controller
{
    public function index(){

        $events = Event::all();

        return view('welcome',
        [
            'events' => $events //Retorno dos eventos no index
        ]);
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
