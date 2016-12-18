@extends('layouts.admin')
@section('content')
  {!! Form::open() !!}
    <div id="msj-success" class="alert alert-success alert-dismissible" role="alert" style="display:none;">
      <strong>Genero Agregado Correctamente.</strong>
    </div>
    @include('genero.form.genero')
    <input type="hidden" name="_token" value="{{ csrf_token() }}" id="token" />
    {!! link_to('#',$title='Registrar',$attributes=['id'=>'registro','class'=>'btn btn-primary'],$secure=null) !!}
  {!! Form::close() !!}

@endsection
