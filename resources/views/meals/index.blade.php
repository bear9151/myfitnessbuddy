@extends('layouts.app')

@section('content')
    <h1>All Meals</h1>
    <hr>
    @if(count($meals) > 0)
        <ul class="list-group">
        @foreach($meals as $meal)
            <li class="list-group-item">
                <a href="/meals/{{$meal->id}}">{{$meal->name}}</a>
                <span class="pull-right">
                    {{$meal->created_at}}
                </span>
            </li>
        @endforeach
        </ul>
        {{$meals->links()}}
    @else
        <h3>No Meals found.</h3>
    @endif
@endsection