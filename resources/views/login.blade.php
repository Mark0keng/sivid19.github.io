@extends('layout.main')

@section('login', 'active')

@section('title', 'Login')

@section('content')
<body>
	<div class="loginPage">
        <div class="left">
            <img src="login.png" alt="" width="400" height="490">
        </div>
        <div class="right">
            <form action="">
                <p class="label">Login</p>
                <label for="email" class="email">E-mail</label>
                <input type="text" name="email" class="inputEmail">
                <label for="password" class="password">Password</label>
                <input type="text" name="password" class="inputPassword">
                <p class="forgot">Forgot Password?</p>
                <button type="submit" value="Login" class="loginButton">Login</button>
                <p class="regis">No registered yet?</p>
                <a href="#">Create Account</a>
            </form>
        </div>
    </div>
</body>


@endsection