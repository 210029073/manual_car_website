@extends('layouts.main')
@section('title','Login')
@section('content')
    <head>
        <link href="/css/Sign-up.css" rel="stylesheet" type="text/css"/>
    </head>
    </head>
    <body>
    <div class="login-ui">
        @if($errors->any())
            <div class="errors">
            <h2 class="centred">Could not register</h2>
            <p class="textpadding23">One or two fields have not been filled correctly.
                    Please amend the following:</p>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="ui-container">
            <div class="ui-prompt-box">
                <div class="login-container">
                    <div>
                        <form method="get" action="{{route("login")}}">
                            @csrf
                            <div class="signupForm">
                                <div>
                                    <h1>Sign In</h1>
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
                                    <input type="submit" class="Button" width="500px" name="btnSubmit" value="Login">
                                </div>
                                <div>
                                    <p>Dont have an account ? <a href='/register' class="clickhere" >CLICK HERE!</a></p>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </body>
@stop
