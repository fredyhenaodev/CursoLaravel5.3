@extends('layouts.admin')
	@section('content')
		@include('alerts.request')
		  	{!!Form::open(['route'=>'pelicula.store', 'method'=>'POST','files' => true])!!}
		  		@include('peliculas.forms.pelicula')
				{!!Form::submit('Registrar',['class'=>'btn btn-primary'])!!}
			{!!Form::close()!!}
	@endsection
