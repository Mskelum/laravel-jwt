<!DOCTYPE html>
<html>
<head>
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="p-5">

    <h1>Welcome, {{ $user->name ?? 'Guest' }}!</h1>
    <p>You are now logged in.</p>

    <form action="{{ route('logout') }}" method="POST">
        @csrf
        <button type="submit" class="btn btn-danger">Logout</button>
    </form>

</body>
</html>
