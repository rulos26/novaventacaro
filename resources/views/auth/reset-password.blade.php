<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restablecer Contraseña</title>
</head>
<body>
    <h1>Restablecer Contraseña</h1>
    <form method="POST" action="{{ route('password.update') }}">
        @csrf
        <input type="hidden" name="token" value="{{ $request->route('token') }}">
        <label for="email">Correo electrónico:</label>
        <input type="email" id="email" name="email" required>
        <br>
        <label for="password">Nueva Contraseña:</label>
        <input type="password" id="password" name="password" required>
        <br>
        <label for="password_confirmation">Confirmar Contraseña:</label>
        <input type="password" id="password_confirmation" name="password_confirmation" required>
        <br>
        <button type="submit">Restablecer Contraseña</button>
    </form>
</body>
</html>
