@extends('layouts.app')

@section('content')
  <h1>Criar Todo</h1>
  {!! Form::open(['action' => 'TodosController@store', 'method' => 'POST']) !!}
    {{ Form::bsText('texto') }}
    {{ Form::bsTextArea('corpo') }}
    {{ Form::bsText('vencimento') }}
    {{ Form::bsSubmit('Criar', ['class' => 'btn btn-primary']) }}
  {!! Form::close() !!}
@endsection
