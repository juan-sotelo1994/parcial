@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Articulos</h1>
@stop

@section('content')
    <table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">referencia</th>
            <th scope="col">Nombre</th>
            <th scope="col">descripcion</th>
            <th scope="col">color</th>
            <th scope="col">pu</th>
            <th scope="col">observacion</th>
            <th scope="col">foto</th>
            <th scope="col">marca</th>
        </tr>
    </thead>
    <tbody>
        @php
        $i = 1;
        @endphp
        @foreach($arti as $a)
        <tr>
        <th scope="row">{{$i}}</th>
        <td>{{$a->referencia}}</td>
        <td>{{$a->nombre}}</td>
        <td>{{$a->descripcion}}</td>
        <td>{{$a->color}}</td>
        <td>{{$a->precioUnitario}}</td>
        <td>{{$a->observacion}}</td>
        <td>{{$a->descripcion}}</td>
        @php 
        $i = $i + 1;
        @endphp
        </tr>
        @endforeach
        
    </tbody>
    </table>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop