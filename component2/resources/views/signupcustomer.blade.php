<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="Khuswi Pun">
    <link rel="stylesheet" href="{{ asset('css/signup.css') }}">
    <title>Register</title>
</head>
<body>
<form action="{{ route('signupcustomer') }}" method="POST">
    <div class="form">
        <div class="field">
            <div class="container">
                <div class="back">
                    <p>Back &larr;</p>
                </div>
                <div class="text-1">Sign Up</div>
                <div class="text-11">Create a Customer Account</div>
                <div class="first">
                    <input type="text" id="firstname" name="firstname" placeholder="First name" autocomplete="off" required>
                </div>
                <div class="last">
                    <input type="text" id="lastname" name="lastname" placeholder="Last name" autocomplete="off" required>
                </div>
                <div class="email">
                    <input type="email" id="email" name="email" placeholder="Email" required>
                </div>
                <div class="pass">
                    <input type="password" id="password" name="password" placeholder="Password" autocomplete="new-password" required>
                <div class="overlap-12">
                    <button type="submit" name="register">Register</button>
                </div>
                <div class="overlap-14">
                    <p>Already have an account? <a href="{{ route('signin') }}">Sign in</a></p>
                </div>
                <div class="text-15">Personal Information</div>
            </div>
        </div>
    </div>
</form>
</body>
</html>