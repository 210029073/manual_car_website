<html>
    <head>
        <title>Register</title>
        <!-- mobile view -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>

    <body>
        <div class="Sign-up">
            <form method="post" action="{{route("register")}}">
                @csrf
                <label>First name</label>
                <br/>
                <input type="text" name="firstName" placeholder="Enter your first name"/>
                <br/>
                <label>Last name</label>
                <br/>
                <input type="text" name="lastName" placeholder="Enter your last name"/>
                <br/>
                <label>Email:</label>
                <br>
                <input type="text" name="email" placeholder="Enter your email"/>
                <br/>
                <label>Password</label>
                <br/>
                <input type="password" name="password" placeholder="Enter your password"/>
                <br/>
                <label>Address</label>
                <br/>
                <input type="text" name="address" placeholder="Enter your address"/>
                <br/>
                <label>Mobile Number</label>
                <br/>
                <input type="text" name="mobile" placeholder="Enter your mobile number"/>
                <br/>
                <br/>
                <input type="submit" name="btnSubmit" value="Register">
            </form>
        </div>
    </body>
</html>
