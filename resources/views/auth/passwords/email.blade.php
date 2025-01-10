<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restablecer Contraseña</title>
    <style>
        /* Aquí van los mismos estilos que en las vistas anteriores */
    </style>
</head>
<body>
    <div class="reset-container">
        <h1>Restablecer Contraseña</h1>
        
        @if(session('status'))
            <div class="status-message">
                <p>{{ session('status') }}</p>
            </div>
        @endif
        
        <form method="POST" action="{{ route('password.email') }}">
            @csrf
            
            <label for="email">Correo electrónico:</label>
            <input type="email" id="email" name="email" value="{{ old('email') }}" required>
            
            @error('email')
                <div style="color: red;">{{ $message }}</div>
            @enderror

            <button type="submit">Enviar enlace de restablecimiento</button>
        </form>
    </div>
</body>
</html>
