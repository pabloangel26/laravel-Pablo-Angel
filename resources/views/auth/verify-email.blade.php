<!-- resources/views/auth/verify-email.blade.php -->

@extends('layouts.app')

@section('content')
<div>
    @if (session('status'))
        <div>{{ session('status') }}</div>
    @endif

    <div>
        <form method="POST" action="{{ route('verification.send') }}">
            @csrf
            <button type="submit">Resend Verification Email</button>
        </form>
    </div>
</div>
@endsection
