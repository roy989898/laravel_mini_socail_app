@extends('layout.app')

@section('title')
    Login
@stop

@section('content')

    <form action="{{route('login')}}" method="post">
        {{csrf_field()}}

        <input type="text" name="username" placeholder="username">
        <br>
        <input type="text" name="password" placeholder="password">
        <br>
        <input type="submit" value="Login">

    </form>


@stop