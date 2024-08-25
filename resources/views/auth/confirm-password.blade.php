<!-- resources/views/auth/confirm-password.blade.php -->

@extends('layouts.app')

@section('content')
<div>
    <form method="POST" action="{{ route('password.confirm') }}">
        @csrf
        <div>
            <label for="password">Confirm Password</label>
            <input id="password" type="password" name="password" required>
            @error('password') <span>{{ $message }}</span> @enderror
        </div>
        <div>
            <button type="submit">Confirm Password</button>
        </div>
    </form>
</div>
@endsection
