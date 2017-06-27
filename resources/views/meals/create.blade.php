@extends('layouts.app')

@section('content')

    <h1>Add a new meal</h1>
    {!! Form::open(['action' => 'MealsController@store', 'method' => 'POST']) !!}
        <div class="form-group">
            {{Form::label('name', 'Name')}}
            {{Form::text('name', '', ['class' => 'form-control', 'placeholder' => 'Meal Name'])}}
        </div>
        {{Form::submit('Submit', ['class'=>'btn btn-success'])}}
    {!! Form::close() !!}

@endsection