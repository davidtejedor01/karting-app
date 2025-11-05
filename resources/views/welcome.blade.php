<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Karting App</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="d-flex align-items-center justify-content-center vh-100 bg-light flex-column">

    <div class="text-center mt-5">
        <h1 class="mb-3">🏎️ Bienvenido a la Karting App</h1>
        <p class="lead mb-4">Administra tus registros de karting de manera fácil y rápida.</p>
    </div>
    <div class="card p-4 shadow" style="width: 350px;">
        <h3 class="text-center mb-3">Iniciar Sesión</h3>

        @if ($errors->any())
            <div class="alert alert-danger text-center">
                {{ $errors->first() }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="mb-3">
                <label>Email</label>
                <input type="email" name="email" class="form-control" value="{{ old('email') }}" required autofocus>
            </div>

            <div class="mb-3">
                <label>Contraseña</label>
                <input type="password" name="password" class="form-control" required>
            </div>

            <button type="submit" class="btn btn-primary w-100">Entrar</button>
        </form>

        <div class="mt-3 text-center">
            <a href="{{ route('register') }}" class="">Crear tu usuario</a>
            </p>
        </div>
    </div>
</body>

</html>