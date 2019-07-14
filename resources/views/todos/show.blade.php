@extends('layouts.app')

@section('content')
  <a class="btn btn-default" href="/">Voltar</a>
  <h1><a href="todo/{{$todo->id}}">{{$todo->texto}}</a></h1>
  <span class="label label-danger">{{$todo->vencimento}}</span>
  <p>{{$todo->corpo}}</p>
  <br>
  <a href="/todo/{{$todo->id}}/edit" class="btn btn-default">Alterar</a>
  {!! Form::open(['action' => ['TodosController@destroy', $todo->id] , 'method' => 'POST', 'class' => 'pull-right']) !!}
    {{ Form::hidden('_method', 'DELETE') }}
    {{ Form::bsSubmit('Deletar', ['class' => 'btn btn-danger']) }}
  {!! Form::close() !!}
@endsection
