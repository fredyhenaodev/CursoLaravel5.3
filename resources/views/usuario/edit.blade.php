@extends('layouts.admin')
@section('content')
    {!! Form::model($user,['route' => ['usuario.update',$user->id],'method'=>'PUT']) !!}
          @include('usuario.forms.user')
          {!! Form::submit('Actualizar',['class' => 'btn btn-primary']) !!}
    {!! Form::close() !!}
@endsection
