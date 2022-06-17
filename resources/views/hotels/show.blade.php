@extends('layouts.app')
@section('main')
        <div class="card card-detail">
            <img src="{{ asset('images/' . $hotel->image) }}" class="card-img-top" alt="...">
            <p class="right">
                <a href="edit/{{ $hotel->id }}" class="btn">Edit</a>
            <form method="POST" action="{{ url('hotel', $hotel->id) }}">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn">Delete</button>
                </p>
                <div class="card-body">
                    <h5 class="card-title">{{ $hotel->name }}</h5>
                    <p class="card-text">{{ $hotel->address }}</p>
                    <p class="card-text">{{ $hotel->price }}</p>
                    <p class="card-text">{{ $hotel->facilitate }}</p>
                    <p class="card-text">{{ $hotel->description }}</p>
                </div>
@endsection
