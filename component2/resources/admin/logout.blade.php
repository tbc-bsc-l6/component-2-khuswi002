<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logout Example</title>
    <script>
        function logout() {
            // Clear session data or local storage if used for login
            localStorage.removeItem('user'); // Example of removing a stored user
            // Redirect to the login page or home page
            window.location.href = '/signin.html';
        }
    </script>
</head>
<body>

    <button onclick="logout()">Logout</button>

</body>
</html>
