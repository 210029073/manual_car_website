<html>
    <head>
        <title>Login</title>
    </head>

    <body>
        <form method="get" action="{{route("login")}}">
            @csrf
            <input type="text" name="username" placeholder="Enter your username"/>
            <input type="password" name="password" placeholder="Enter your password"/>
            <input type="submit" name="btnSubmit" value="Login">
        </form>
    </body>
</html>
