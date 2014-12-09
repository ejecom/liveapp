@extends('layouts.default')

@section('content')

<h1>Listado de usuarios</h1>

<ul>
@foreach($clientes as $cliente)
    <li>{{link_to("/clientes/$cliente->username")}}</li>
 @endforeach
 </ul>


<a href="/liveapp/public/clientes/create">Crear nuevo Usuario</a>

 @stop