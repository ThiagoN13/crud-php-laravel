<div class="form-group">

</div>

<div class="form-group">
  {!! Form::open(array('route' => 'usuario.create', 'class' => 'form')) !!}

<div class="form-group">
    {!! Form::label('Nome') !!}
    {!! Form::text('nome', null, 
        array('required', 
              'class'=>'form-control', 
              'placeholder'=>'Informe seu nome')) !!}
</div>

<div class="form-group">
    {!! Form::label('E-mail') !!}
    {!! Form::text('email', null, 
        array('required', 
              'class'=>'form-control', 
              'placeholder'=>'Informe seu email')) !!}
</div>

<div class="form-group">
    {!! Form::label('Senha') !!}
    {!! Form::password('senha', null, 
        array('required', 
              'class'=>'form-control', 
              'placeholder'=>'Informe sua senha')) !!}
</div>

<div class="form-group">
    {!! Form::submit('Cadastrar', 
      array('class'=>'btn btn-primary')) !!}
</div>
{!! Form::close() !!}

</div>
