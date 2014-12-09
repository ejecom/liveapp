@extends('layouts.default')

@section('content')

<h1>Crear Nuevo Cliente</h1>

{{Form::open(['route' => 'clientes.store'])}}

<div>
{{Form::label('username', 'Usuario: ')}}
{{Form::text('username')}}
</div>

<div>
{{Form::label('password', 'Contrseña: ')}}
{{Form::password('password')}}
</div>
<div>
{{Form::submit('Guardar')}}
</div>

{{Form::close()}}

 @stop