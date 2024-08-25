<!-- resources/views/auth/reset-password.blade.php -->

@extends('layouts.app')

@section('content')
<div>
    <form method="POST" action="{{ route('password.store') }}">
        @csrf
        <input type="hidden" name="token" value="{{ $token }}">
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
            <label for="password_confirmation">Confirm Password</label>
            <input id="password_confirmation" type="password" name="password_confirmation" required>
        </div>
        <div>
            <button type="submit">Reset Password</button>
        </div>
    </form>
</div>
@endsection
