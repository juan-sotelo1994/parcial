@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Marcas</h1>
@stop

@section('content')
    <p>Welcome Marcas</p>
    @section('content')
    <table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">idMarca</th>
            <th scope="col">descripcion</th>
        </tr>
    </thead>
    <tbody>
        @php
        $i = 1;
        @endphp
        @foreach($marca as $m)
        <tr>
        <th scope="row">{{$i}}</th>
        <td>{{$m->idMarca}}</td>
        <td>{{$m->descripcion}}</td>
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