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

    public function store(Request $request){ //Request do formulário da criação de evento

        $event = new Event;

        $event->title = $request->title;
        $event->city = $request->city;
        $event->private = $request->private;
        $event->description = $request->description;

        $event->save();

        return redirect('/');
    }

    public function login(){
        return view('login.login');
    }

    public function register(){
        return view('login.register');
    }
}
