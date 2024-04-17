@extends('layouts.template')
@section('title', 'Profile |')
@section('content')
    {{-- hero section --}}
    <div class="content-container">
        <div class="container-proff">
            <div class="profile-header">
              <img src="profile-picture.jpg" alt="Profile Picture" class="profile-picture">
              <h1>{{ Auth::user()->name }}</h1>
              <p>Email:  {{ Auth::user()->email }}</p>
            </div>
            <div class="profile-info">
              <h2>Profile Information</h2>
              <p><strong>Lorem:</strong></p>
              <p><strong>Lorem:</strong></p>
            </div>
            <div class="profile-bio">
              <h2>Bio</h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam in magna a dolor commodo maximus.</p>
            </div>
          </div>
    </div>
@endsection