@extends('layouts.admin')
<?php $message=Session::get('message') ?>
@if($message == 'store')
    <div class="alert alert-sucess alert-dismissible fade in" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
    </button>
          Usuario Creado Correctamente.
    </div>
@endif
@section('content')
  <table class="table">
    <thead>
      <th>Nombre</th>
      <th>Correo</th>
      <th>Opreación</th>
    </thead>
    @foreach ($users as $datos)
    <tbody>
      <td>{{$datos->name}}</td>
      <td>{{$datos->email}}</td>
      <td></td>
    </tbody>
    @endforeach
  </table>

@endsection
