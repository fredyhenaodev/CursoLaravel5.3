@extends('layouts.admin')
@section('content')
  {!! Form::open(['route' => 'usuario.store','method' => 'POST']) !!}
      <div class="form-group">
        {!! Form::label('Nombre:') !!}
        {!! Form::text('nombre',null,['class' => 'form-control','placeholder' => 'Nombre']) !!}
      </div>
      <div class="form-group">
        {!! Form::label('Correo:') !!}
        {!! Form::email('correo',null,['class' => 'form-control','placeholder' => 'Correo']) !!}
      </div>
      <div class="form-group">
        {!! Form::label('Contraseña:') !!}
        {!! Form::password('password',['class' => 'form-control','placeholder' => 'Password']) !!}
      </div>
      {!! Form::submit('Registrar',['class' => 'btn btn-primary']) !!}
  {!! Form::close() !!}
@endsection
