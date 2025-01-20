<!-- registration form -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="Khuswi Pun">
    <link rel="stylesheet" href="{{ asset('css/signup.css') }}">
    <title>Register</title>
</head>
<body>
<form action="trader_register.php" method="POST">
    <div class="form">
        <div class="field">
        <div class="container">
            <div class = "back">
             <p>Back &larr;</p>
            </div>

            <div class="text-1">Sign Up</div>
            <div class="text-11">Create a Trader Account</div>

            <div class="first">
                <input type="text" id="firstname" name="firstname" placeholder="First name" autocomplete="off" required>
            </div>

            <div class="last">
                <input type="text" id="lastname" name="lastname" placeholder="Last name" autocomplete="off" required>
            </div>

            <div class="dob">
                <input type="date" id="dob" name="dob" placeholder="Date of Birth" required>
            </div>

            <div class="phone">
                <input type="tel" id="phone" name="phone_no" placeholder="Phone no" required>
            </div>

            <div class="email">
                <input type="email" id="email" name="email" placeholder="Email" required>
            </div>

            <div class="pass">
                <input type="password" id="password" name="password" placeholder="Password" autocomplete="new-password" required>
                <?php if (isset($passwordError)) { ?>
                        <div class="error"><?php echo $passwordError; ?></div>
                    <?php } ?>

            </div>

            <div class="country">
                <input type="text" id="country" name="country" placeholder="Country" autocomplete="off">
            </div>

            <div class="city">
                <input type="text" id="city" name="city" placeholder="City" autocomplete="off" >
            </div>

            <div class="postal">
                <input type="text" id="postalcode" name="postalcode" placeholder="Postal Code" autocomplete="off" >
            </div>

            <div class="address">
                <input type="text" id="address" name="address_line" placeholder="Address Line" autocomplete="off">
            </div>

            <div class="overlap-12">
                <button type="submit" name="register">Register</button>
            </div>
            <div class="overlap-14">
                <p>Already have an account? <a href="{{ route('signin') }}">Sign in</a></p>
            </div>

            <div class="text-14">Address</div>
            <div class="text-15">Personal Information</div>
        </div>
    </div>
</form>
</body>
</html>