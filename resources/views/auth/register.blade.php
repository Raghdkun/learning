@extends('layouts.app')

@section('title', 'Register')

@section('content')
    <h2>Register</h2>
    <form id="registerForm" method="POST" action="{{ route('register') }}">
        @csrf
        <x-input-group label="Email" type="email" name="email" required="true" />
        <x-input-group label="Password" type="password" name="password" required="true" />
        <x-select-group label="Department" name="department" :options="['Sales', 'Marketing', 'Development', 'HR']" />
        <x-select-group label="Position" name="position" :options="['Manager', 'Team Lead', 'Developer', 'Intern']" />
        <button type="submit">Register</button>
    </form>
@endsection
