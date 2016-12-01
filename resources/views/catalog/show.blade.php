@extends('layouts.master')

@section('content')

    <div class="row">

        <div class="col-sm-4">

            <img src="{{$pelicula['poster']}}" style="height:400px"/>

        </div>
        <div class="col-sm-8">

            <h1>{{$pelicula['title']}}</h1>
            <h2>{{$pelicula['year']}}</h2>
            <h3>{{$pelicula['director']}}</h3>
            <p style="text-align: justify"><b>Resumen: </b>{{$pelicula['synopsis']}}</p>
            <p><b>Estado:</b> @if($pelicula['rented'] == false ) Película disponible @else Película actualmente alquilada @endif</p>

            @if($pelicula['rented'] == false )
                <button type="button" class="btn btn-primary">Alquilar película</button>
            @else
                <button type="button" class="btn btn-danger">Devolver película</button>
            @endif
            <button type="button" class="btn btn-warning" onclick="window.location.replace('/catalog/edit/{{$id}}');"> <span class="glyphicon glyphicon-pencil"></span> Editar Pelicula</button>
            <button type="button" class="btn btn-default" onclick="window.location.replace('/');"> <span class="glyphicon glyphicon-chevron-left"></span>Volver al listado</button>


        </div>
    </div>

@stop