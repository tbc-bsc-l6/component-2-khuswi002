<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logout</title>
    <script>
        function logout() {
            // Redirect to the signin page
            window.location.href = "{{ route('signin') }}";
        }
    </script>
</head>
<body>
    <h1>Logout Page</h1>
    <button onclick="logout()">Logout</button>
</body>
</html>
