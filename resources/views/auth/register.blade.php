<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrarse</title>
</head>
<body>
    <h1>Registrarse</h1>
    <form method="POST" action="{{ route('register') }}">
        @csrf
        
        <!-- Nombre -->
        <label for="name">Nombre:</label>
        <input type="text" id="name" name="name" value="{{ old('name') }}" required>
        @error('name')
            <div style="color: red;">{{ $message }}</div>
        @enderror
        <br>
        
        <!-- Email -->
        <label for="email">Correo electrónico:</label>
        <input type="email" id="email" name="email" value="{{ old('email') }}" required>
        @error('email')
            <div style="color: red;">{{ $message }}</div>
        @enderror
        <br>
        
        <!-- Contraseña -->
        <label for="password">Contraseña:</label>
        <input type="password" id="password" name="password" required>
        @error('password')
            <div style="color: red;">{{ $message }}</div>
        @enderror
        <br>
        
        <!-- Confirmar Contraseña -->
        <label for="password_confirmation">Confirmar Contraseña:</label>
        <input type="password" id="password_confirmation" name="password_confirmation" required>
        @error('password_confirmation')
            <div style="color: red;">{{ $message }}</div>
        @enderror
        <br>
        
        <button type="submit">Registrarse</button>
    </form>
</body>
</html>
