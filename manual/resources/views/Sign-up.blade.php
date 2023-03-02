@extends('layouts')
@section('content')
    <html>
    <head>
        <title>Register</title>
        <!-- mobile view -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="/css/Sign-up.css" rel="stylesheet" type="text/css"/>
    </head>

    <body>
    <div class="Sign-up">
        @if($errors->any())
            <div class="errors">
                <h2>Could not register</h2>
                <p>One or two fields have not been filled correctly.
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
                    <form method="post" action="{{route("register")}}">
                        @csrf
                        <div class="signupForm">
                            <div class="Title">Sign-up</div>
                            <div>
                                <label>First name</label>
                                <br/>
                                <input type="text" name="firstName" value="{{old('firstName')}}" placeholder="Enter your first name"/>
                                <br/>
                            </div>

                            <div>
                                <label>Last name</label>
                                <br/>
                                <input type="text" name="lastName" value="{{old('lastName')}}" placeholder="Enter your last name"/>
                                <br/>
                            </div>

                            <div>
                                <label>Email:</label>
                                <br>
                                <input type="text" name="email"  value="{{old('email')}}" placeholder="Enter your email"/>
                                <br/>
                            </div>

                            <div>
                                <label>Password</label>
                                <br/>
                                <input type="password" name="password" placeholder="Enter your password"/>
                                <br/>
                            </div>

                            <div>
                                <label>Address</label>
                                <br/>
                                <input type="text" name="address"  value="{{old('address')}}" placeholder="Enter your address"/>
                                <br/>
                            </div>
                            <div>
                                <label>Mobile Number</label>
                                <br/>
                                <input type="text" name="mobile"  value="{{old('mobile')}}" placeholder="Enter your mobile number"/>
                                <br/>
                                <br/>
                            </div>
                            <div>
                                <input type="submit" name="btnSubmit" value="Register">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
    </body>
    </html>
@endsection
