@extends('layouts.app')

@section('content')
    <span class="meal-name">{{$meal->name}}</span>
    <span class="meal-time">test {{$meal->created_at}}</span>
    <br>
    <span class="meal-data label label-pill label-primary">{{$meal->kcal}} kCal</span>
    <span class="meal-data label label-pill label-default">{{$meal->protein}}g Protein</span>
    <span class="meal-data label label-pill label-default">{{$meal->carb}}g Carbohydrates</span>
    <span class="meal-data label label-pill label-default">{{$meal->fat}}g Fat</span>
    <hr>
    {{--@if(count($meals) > 0)--}}
        {{--<ul class="list-group">--}}
            {{--@foreach($meals as $meal)--}}
                {{--<li class="list-group-item">--}}
                    {{--<a href="/meals/{{$meal->id}}">{{$meal->name}}</a>--}}
                    {{--<span class="pull-right">--}}
                    {{--test--}}
                        {{--{{$meal->created_at}}--}}
                {{--</span>--}}
                {{--</li>--}}
            {{--@endforeach--}}
        {{--</ul>--}}
    {{--@else--}}
        {{--<h3>No Meals found.</h3>--}}
    {{--@endif--}}
@endsection