@extends('layouts.app')

@section('content')
    <span class="meal-name">{{$meal->name}} </span>
    <small class="meal-time"> {{$meal->created_at}}</small>
    <br>
    <span class="meal-data label label-pill label-primary">{{$meal->kcal}} kCal</span>
    <span class="meal-data label label-pill label-default">{{$meal->protein}}g Protein</span>
    <span class="meal-data label label-pill label-default">{{$meal->carb}}g Carbohydrates</span>
    <span class="meal-data label label-pill label-default">{{$meal->fat}}g Fat</span>
    <hr>

@endsection