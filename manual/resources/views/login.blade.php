@extends('layouts')
@section('title','Login')
@section('content')
    <body>
        <div class="login-container">
            <i class="fa-regular fa-user" style="font-size:50px;margin-bottom:25px;"></i>
            <form method="get" action="{{route("login")}}">
                @csrf
                <input type="text" name="username" placeholder="Enter your username"/></br>
                <input type="password" name="password" placeholder="Enter your password"/></br>
                <input type="submit" name="btnSubmit" value="Login">
            </form>
            <p>Dont have an account ? <a href='/register'>CLICK HERE! </a></p>
        </div>
    </body>
@stop
