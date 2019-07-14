@extends('layouts.app')

@section('content')
<link rel="shortcut icon" href="{{ asset('favicon.ico') }}" >
  <h1>ToDos</h1>
  @if(count($todos) > 0)
    @foreach ($todos as $todo)
      <div class="well">
        <h3><a href="todo/{{$todo->id}}">{{$todo->texto}}</a></h3>
        <span class="label label-danger">{{$todo->vencimento}}</span>
      </div>
    @endforeach
  @endif
@endsection
