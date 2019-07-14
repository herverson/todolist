@extends('layouts.app')

@section('content')
<a class="btn btn-default" href="/todo/{{$todo->id}}">Voltar</a>
  <h1>Editar Todo</h1>
  {!! Form::open(['action' => ['TodosController@update', $todo->id] , 'method' => 'POST']) !!}
    {{ Form::bsText('texto', $todo->texto) }}
    {{ Form::bsTextArea('corpo', $todo->corpo) }}
    {{ Form::bsText('vencimento', $todo->vencimento) }}
    {{ Form::hidden('_method', 'PUT') }}
    {{ Form::bsSubmit('Editar', ['class' => 'btn btn-primary']) }}
  {!! Form::close() !!}
@endsection
