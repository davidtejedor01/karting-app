<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    @stack('head')
</head>

<body style="background: url('{{ asset('images/kart.jpg') }}') no-repeat center center fixed; background-size: cover;">
    <div class="container mt-5">
        @yield('content')
    </div>

    @stack('scripts')
</body>

</html>