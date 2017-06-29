@extends('layouts.app')

@section('content')
    <span class="meal-name">{{$meal->name}} </span>
    <small class="meal-time"> {{$meal->created_at}}</small>
    <a class="btn btn-default pull-right" href="/meals/{{$meal->id}}/edit">Change Meal Name</a>

    {!! Form::open(['action' => ['MealsController@destroy', $meal->id], 'method' => 'POST', 'class' => 'pull-right']) !!}
        {{Form::hidden('_method', 'DELETE')}}
        {{Form::submit('Delete Meal', ['class' => 'btn btn-danger pull-right'])}}
    {!! Form::close() !!}

    <br>
    <span class="meal-data label label-pill label-primary">{{$meal->kcal}} kCal</span>
    <span class="meal-data label label-pill label-default">{{$meal->protein}}g Protein</span>
    <span class="meal-data label label-pill label-default">{{$meal->carb}}g Carbohydrates</span>
    <span class="meal-data label label-pill label-default">{{$meal->fat}}g Fat</span>
    <hr>
    <h3>Foods</h3>
    <ul class="list-group">
        <li class="list-group-item">Food Name Test
            <span class="pull-right">test : test : test</span>
        </li>
    </ul>
    <hr>

    @include('inc.foodform')

@endsection