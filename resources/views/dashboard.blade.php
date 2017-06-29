@extends('layouts.app')

@section('content')
    <div class="panel panel-primary">
        <div class="panel-heading">
            <h3 class="panel-title">Welcome back, {{ Auth::user()->name }}.</h3>
        </div>
        <div class="panel-body">
            @if(count($meals) > 0)
                <h4>Here's what you've eaten today.</h4>
                <ul class="list-group">
                    @foreach($meals as $meal)
                        <li class="list-group-item">
                            <a href="/meals/{{$meal->id}}">{{$meal->name}}</a>
                            <a class="pull-right" href="/meals/{{$meal->id}}/edit">Change Meal Name</a>
                        </li>
                    @endforeach
                </ul>
            @else
                <h4>Bet you're hungry. Why not <a href="/meals/create">add a new meal now</a>?</h4>
            @endif
        </div>
    </div>
@endsection
