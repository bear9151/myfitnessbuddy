@extends('layouts.app')

@section('content')
    <div class="panel panel-success">
        <div class="panel-heading">
            <h3 class="panel-title">Welcome back, {{$user}}.</h3>
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
