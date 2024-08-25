@extends('layouts.app')

@section('content')
<div>
    <form method="POST" action="{{ route('login') }}">
        @csrf
        <div>
            <label for="email">Email</label>
            <input id="email" type="email" name="email" value="{{ old('email') }}" required>
            @error('email') <span>{{ $message }}</span> @enderror
        </div>
        <div>
            <label for="password">Password</label>
            <input id="password" type="password" name="password" required>
            @error('password') <span>{{ $message }}</span> @enderror
        </div>
        <div>
            <button type="submit">Login</button>
        </div>
        <div>
            <a href="{{ route('register') }}">No tienes una cuenta? Regístrate aquí</a>
        </div>
        <!-- Botón o enlace para recuperar la contraseña -->
        <div>
            <a href="{{ route('password.request') }}">¿Olvidaste tu contraseña?</a>
        </div>
    </form>
</div>
@endsection
