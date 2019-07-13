@extends('layouts.app')

@section('content')

  <h1>Todos</h1>
  @if(count($todos) > 0)
    @foreach ($todos as $todo)
      <div class="well">
        <h3>{{$todo->texto}}</h3>
        <span class="label label-danger">{{$todo->vencimento}}</span>
      </div>
    @endforeach
  @endif
@endsection