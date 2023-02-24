@extends('layouts')
@section('title','Login')
@section('content')
    <body>
        <div class="ui-container">
            <div class="ui-prompt-box">
                <div class="login-container">
                    <div>
                        <form method="get" action="{{route("login")}}">
                            @csrf
                            <div class="signupForm">
                                <div>
                                    <i class="fa-regular fa-user" style="font-size:50px;margin-bottom:25px;"></i>
                                </div>
                            <div>
                            <p>Username: </p>
                            <input type="text" name="username" placeholder="Enter your username"/></br>
                            </div>
                            <div>
                                <p>Password: </p>
                            <input type="password" name="password" placeholder="Enter your password"/></br>
                            </div>
                            <br/>
                            <div>
                                <input type="submit" name="btnSubmit" value="Login">
                            </div>
                            <div>
                                <p>Dont have an account ? <a href='/register'>CLICK HERE! </a></p>
                            </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </body>
@stop
