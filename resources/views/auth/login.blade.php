@extends('layouts.app')

@section('title', 'Login')

@section('content')
    <h2>Login</h2>
    <form id="loginForm" method="POST" action="{{ route('login') }}">
        @csrf
        <x-input-group label="Email" type="email" name="email" required="true" />
        <x-input-group label="Password" type="password" name="password" required="true" />
        <button type="submit">Login</button>
    </form>
@endsection
