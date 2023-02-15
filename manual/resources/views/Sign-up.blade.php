<html>
<head>
    <title>Login</title>
</head>

<body>
<form method="post" action="{{route("login")}}">
    @csrf
    <input type="text" name="firstName" placeholder="Enter your first name"/>
    <input type="text" name="lastName" placeholder="Enter your last name"/>
    <input type="text" name="email" placeholder="Enter your email"/>
    <input type="password" name="password" placeholder="Enter your password"/>
    <input type="text" name="address" placeholder="Enter your address"/>
    <input type="text" name="mobile" placeholder="Enter your mobile number"/>
    <input type="submit" name="btnSubmit" value="Login">
</form>
</body>
</html>
