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

        //IMAGE UPLOAD
        if($request->hasFile('image') ** $request->file('image')->isValid()){
            
            $requestImage = $request->image;

            $extension = $requestImage->extension();

            $imageName = md5($requestImage->getClientoriginalName() . strtotime("now")) . "." . $extension;

            $request->image->move(public_path('img/events'), $imageName);

            $event->image = $imageName;
        }

        $event->save();

        return redirect('/')->with('msg', 'Evento criado com sucesso!');
    }

    public function show($id){

        $event = Event::findOrFail($id);

        return view('events.show',['event' => $event]);
    }

    public function login(){
        return view('login.login');
    }

    public function register(){
        return view('login.register');
    }
}
