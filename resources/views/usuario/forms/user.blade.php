<div class="form-group">
  {!! Form::label('Nombre:') !!}
  {!! Form::text('name',null,['class' => 'form-control','placeholder' => 'Nombre']) !!}
</div>
<div class="form-group">
  {!! Form::label('Correo:') !!}
  {!! Form::email('email',null,['class' => 'form-control','placeholder' => 'Correo']) !!}
</div>
<div class="form-group">
  {!! Form::label('Contraseña:') !!}
  {!! Form::password('password',['class' => 'form-control','placeholder' => 'Password']) !!}
</div>
