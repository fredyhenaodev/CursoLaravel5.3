@extends('layouts.admin')
@section('content')
<table class="table">
  <thead>
    <th>Nombre</th>
    <th>Opreación</th>
  </thead>
  <tbody id="valores">
  </tbody>
</table>
@endsection
@section('scripts')
    {!! Html::script('js/script2.js') !!}
@endsection
