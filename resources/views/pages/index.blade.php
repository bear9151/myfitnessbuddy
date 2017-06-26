@extends('layouts.app')

@section('content')

    <div class="jumbotron text-center">
        <h1>Hey there, Fitness Fanatic!</h1>
        <p>My Fitness Buddy is a cool way to track mactronutrient data for your meals each day.</p>
        <p><a class="btn btn-primary btn-lg" href="/login" role="button">Login</a> <a class="btn btn-success btn-lg" href="/register" role="button">Register</a> </p>
    </div>

    <div class="panel panel-success">
        <div class="panel-heading">
            <h3 class="panel-title">Welcome back, {{$name}}.</h3>
        </div>
        <div class="panel-body">
            <h4>Here's what you've eaten today.</h4>
            <ul class="list-group">
                <li class="list-group-item">Test Item 1</li>
                <li class="list-group-item">Test Item 1</li>
                <li class="list-group-item">Test Item 1</li>
            </ul>
            <h4>Bet you're hungry. Why not <a href="/meals/create">add a new meal now</a>?</h4>
        </div>
    </div>

@endsection