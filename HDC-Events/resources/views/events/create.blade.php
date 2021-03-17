@extends('layouts.main')

@section('title', 'Criar Evento')

@section('content')

    <div id="event-create-container" class="col-md-6 offset-md-3">
        <h1>Crie seu evento</h1>
        <form action="/events" method="POST">
        @csrf<!--SÓ ENVIA O FORM COM ESSA DIRETIVA / PREVENÇÃO DE ATAQUES A FORMULÁRIOS-->
            <div class="form-group">
                <label for="title">Evento:</label>
                <input type="text" class="form-control" id="title" name="title" placeholder="Nome do evento">
            </div><!--form-group-->

            <div class="form-group">
                <label for="title">Cidade:</label>
                <input type="text" class="form-control" id="city" name="city" placeholder="Local do evento">
            </div><!--form-group-->

            <div class="form-group">
                <label for="title">O evento é privado?</label>
                <select name="private" id="private" class="form-control">
                    <option value="0">Não</option>
                    <option value="1">Sim</option>
                </select>
            </div><!--form-group-->

            <div class="form-group">
                <label for="title">Evento:</label>
                <textarea name="description" id="description" class="form-control" placeholder="O que vai acontecer no evento?"></textarea>
            </div><!--form-group-->

            <input type="submit" class="btn btn-primary" value="Criar Evento">
        </form>
    </div><!--event-create-->

@endsection