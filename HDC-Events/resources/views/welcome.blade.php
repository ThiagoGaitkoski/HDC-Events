@extends('layouts.main')

@section('title', 'HDC-Events')

@section('content')

    <div id="search-container" class="col-md-12">
        <h1>Busque um evento</h1>
        <form action="">
            <input type="text" id="search" name="search" class="form-control" placeholder="Procurar evento...">
        </form>
    </div><!--search-container-->

    <div id="events-container" class="col-md">
        <h2>Próximos Eventos</h2>
            <p class="subtitle">Veja os eventos dos próximos dias</p>
                <div id="cards-container" class="row">
                    @foreach($events as $event)
                        <div class="card col-md">
                            <img src="/img/event_placeholder.jpg" alt="{{ $event->title }}">
                            <div class="card-body">
                                <p class="card-date">10/03/2021</p>
                                <h5 class="card-title">{{ $event->title }}</h5>
                                <p class="card-participants">X Participantes</p>
                                <a href="#" class="btn btn-primary">Saber mais</a>
                            </div><!--card-body-->
                        </div><!--card-->
                    @endforeach
                </div><!--cards-container-->
    </div><!--events-container-->

@endsection