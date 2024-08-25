<!-- resources/views/auth/forgot-password.blade.php -->

@extends('layouts.app')

@section('content')
<div>
    <form method="POST" action="{{ route('password.email') }}">
        @csrf
        <div>
            <label for="email">Email</label>
            <input id="email" type="email" name="email" value="{{ old('email') }}" required>
            @error('email') <span>{{ $message }}</span> @enderror
        </div>
        <div>
            <button type="submit">Enviar enlace de recuperación</button>
        </div>
    </form>
</div>
@endsection
