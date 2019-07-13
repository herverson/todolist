@extends('layouts.app')

@section('content')
  <a class="btn btn-default" href="../../public/">Voltar</a>
  <h1><a href="todo/{{$todo->id}}">{{$todo->texto}}</a></h1>
  <span class="label label-danger">{{$todo->vencimento}}</span>
  <p>{{$todo->corpo}}</p>
@endsection
