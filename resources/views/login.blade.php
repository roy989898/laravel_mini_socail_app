@extends('layout.app')

@section('title')
    Login
@stop

@section('content')

    <form action="{{route('login')}}" method="post">
        {{csrf_field()}}

        <input type="submit" value="Login">

    </form>


@stop