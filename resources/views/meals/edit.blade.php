@extends('layouts.app')

@section('content')

    <h1>Change Meal Name</h1>
    {!! Form::open(['action' => ['MealsController@update', $meal->id], 'method' => 'POST']) !!}
    <div class="form-group">
        {{Form::label('name', 'Name')}}
        {{Form::text('name', $meal->name, ['class' => 'form-control', 'placeholder' => 'Meal Name'])}}
    </div>
    {{Form::hidden('_method', 'PUT')}}
    {{Form::submit('Submit', ['class'=>'btn btn-success'])}}
    {!! Form::close() !!}

@endsection