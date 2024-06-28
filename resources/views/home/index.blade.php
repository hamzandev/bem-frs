<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home | BEM-FRS</title>
</head>
<body>
    <h1>Homepage</h1>
    <a href="/admin">{{ Auth::user() ? 'Go to Admin Dashboard' : 'Login as Admin' }}</a>
</body>
</html>
