@extends('layouts.admin')
@if(Session::has('message'))
    <div class="alert alert-sucess alert-dismissible fade in" role="alert">
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
          {{Session::get('message')}}
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
      <td>{!! link_to_route('usuario.edit', $title = 'Editar', $parameters = $datos->id, $attributes = ['class'=>'btn btn-primary']); !!}</td>
    </tbody>
    @endforeach
  </table>

@endsection
