@extends('layouts.app')
@section('main')

<a href="/hotel/add" class="btn">Create</a>
<div class="card">
@foreach ($hotels as $hotel)
    <img src="{{ asset('images/' . $hotel->image) }}" class="card-img-top" alt="{{ $hotel->name }}
    ">
    <div class="card-body">
        <h5 class="card-title">{{ $hotel->name }}</h5>
        <p class="card-text"><i class="fa-solid fa-location-dot"></i> {{ $hotel->address }}</p>
        <p class="card-text"><i class="fa-solid fa-money-bill"></i> {{ $hotel->price }}</p>
        <p class="card-text"><a href="{{ url('hotel/'.$hotel->id) }}" class="btn">View</a></p>
    </div>
@endforeach
@endsection