@extends('layouts')
@section('content')
<html>
    <head>
        <title>Register</title>
        <!-- mobile view -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>

    <body>
        <div class="Sign-up">
            <div class="ui-container">
                <div class="ui-prompt-box">
                    <div class="login-container">
                        <form method="post" action="{{route("register")}}">
                            @csrf
                            <div class="signupForm">
                            <div>
                            <label>First name</label>
                            <br/>
                            <input type="text" name="firstName" placeholder="Enter your first name"/>
                            <br/>
                            </div>

                            <div>
                            <label>Last name</label>
                            <br/>
                            <input type="text" name="lastName" placeholder="Enter your last name"/>
                            <br/>
                            </div>

                            <div>
                            <label>Email:</label>
                            <br>
                            <input type="text" name="email" placeholder="Enter your email"/>
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
                            <input type="text" name="address" placeholder="Enter your address"/>
                            <br/>
                            </div>
                            <div>
                            <label>Mobile Number</label>
                            <br/>
                            <input type="text" name="mobile" placeholder="Enter your mobile number"/>
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
