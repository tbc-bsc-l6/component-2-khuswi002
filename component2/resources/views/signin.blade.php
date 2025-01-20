<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/signin.css') }}">
    <title>SVG Example</title>
</head>
<body>
    <form action="" method="POST" id="login_form">
        <div class="form">
            <div class="field">
                <div class="container">
                    <div class="text-1">Sign In</div>

                    <div class="user">
                        <input type="text" id="email" name="email" placeholder="Email or Phone Number" autocomplete="off">
                    </div>

                    <div class="pass">
                        <input type="password" id="password" name="password" placeholder="Password" autocomplete="off">
                    </div>

                    <div class="role">
                        <select id="role" name="role">
                            <option value="" disabled selected>Role</option>
                            <option value="Customer">Customer</option>
                            <option value="Admin">Admin</option>
                        </select>
                    </div>

                    <div class="overlap-12">
                        <button type="submit" name="submit">Login</button>
                    </div>

                    <div class="overlap-14">
                        <p>Don't have an account?</p>
                        <p>Sign Up as a <a href="{{ route('signupadmin') }}">Admin</a>&nbspor&nbsp<a href="{{ route('signupcustomer') }}">Customer</a></p>
                        <br>
                        <a href="forgotpassword.html">Forgot Password?</a>
                    </div>
                </div>
            </div>
        </div>
    </form>
</body>
</html>
