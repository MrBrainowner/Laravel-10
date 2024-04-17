@extends('layouts.template')
@section('title', 'Plants |')
@section('content')
<div class="content-container">
    <div class="container-fluid hero">
        <h1>Welcome! {{ Auth::user()->name }}</h1>
    </div>
    <div class="container-fluid hero">
        <img class="heroImage" src="{{ "images/heroimg.jpg" }}" alt="image">
    </div>
</div>
    <div class="card-container">
        <div class="card">
            <img src="{{ "images/plant.jpg" }}" alt="plant">
            <button class="details">Details</button>
        </div>
        <div class="card">
            <img src="{{ "images/plant.jpg" }}" alt="plant">
            <button class="details">Details</button>
        </div>
        <div class="card">
            <img src="{{ "images/plant.jpg" }}" alt="plant">
            <button class="details">Details</button>
        </div>
        <div class="card">
            <img src="{{ "images/plant.jpg" }}" alt="plant">
            <button class="details">Details</button>
        </div>
        <div class="card">
            <img src="{{ "images/plant.jpg" }}" alt="plant">
            <button class="details">Details</button>
        </div>
        <div class="card">
            <img src="{{ "images/plant.jpg" }}" alt="plant">
            <button class="details">Details</button>
        </div>
        <div class="card">
            <img src="{{ "images/plant.jpg" }}" alt="plant">
            <button class="details">Details</button>
        </div>
        <div class="card">
            <img src="{{ "images/plant.jpg" }}" alt="plant">
            <button class="details">Details</button>
        </div>

    </div>
@endsection