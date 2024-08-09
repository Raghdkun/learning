@extends('layouts.dashboard')

@section('title', 'Profile Page')

@section('header', 'Profile')

@section('content')
    <div class="profile-header">
        <div class="profile-picture">
            <img src="https://via.placeholder.com/150" alt="Profile Picture">
        </div>
        <div class="profile-info">
            {{-- <h2>{{ $user->name }}</h2> --}}
            <h2>mohamad</h2>

            {{-- <p><i class="fas fa-envelope"></i> {{ $user->email }}</p> --}}
            <p><i class="fas fa-envelope"></i> example</p>

            {{-- <p><i class="fas fa-phone"></i> {{ $user->phone }}</p> --}}
            <p><i class="fas fa-phone"></i> 09xxxxxxx</p>

            {{-- <p><i class="fas fa-map-marker-alt"></i> {{ $user->address }}</p> --}}
            <p><i class="fas fa-map-marker-alt"></i> maf3lee</p>

        </div>
        <button class="edit-btn"><i class="fas fa-edit"></i> Edit Profile</button>
    </div>
    <div class="profile-details">
        <h3>Profile Details</h3>
        <form method="POST" action="{{ route('profile.update') }}">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="name">Full Name</label>
                {{-- <input type="text" id="name" name="name" value="{{ $user->name }}"> --}}
            </div>
            <div class="form-group">
                <label for="email">Email Address</label>
                {{-- <input type="email" id="email" name="email" value="{{ $user->email }}"> --}}
            </div>
            <div class="form-group">
                <label for="phone">Phone Number</label>
                {{-- <input type="text" id="phone" name="phone" value="{{ $user->phone }}"> --}}
            </div>
            <div class="form-group">
                <label for="address">Address</label>
                {{-- <input type="text" id="address" name="address" value="{{ $user->address }}"> --}}
            </div>
            <button type="submit" class="save-btn">Save Changes</button>
        </form>
    </div>
@endsection
