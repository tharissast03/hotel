@extends('layouts.app')
@section('main')

<form action="{{ url('hotel/edit', $hotel->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="form-group">
        <input type="file" class="form-control" id="image" name="image">
    </div>
    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" class="form-control" id="name" name="name" placeholder="Name" value="{{ $hotel->name }}">
    </div>
    <div class="form-group">
        <label for="address">Address</label>
        <input type="text" class="form-control" id="address" name="address" placeholder="Address"value="{{ $hotel->address }}">
    </div>
    <div class="form-group">
        <label for="price">Price</label>
        <input type="number" class="form-control" id="price" name="price" placeholder="Price" value="{{ $hotel->price }}">>
    </div>
    <div class="form-group">
        <label for="facilitate">Facilitate</label>
        <input type="radio" name="facilitate" {{ old('facilitate',$hotel->facilitate=='Shower' ? 'checked' : '')}} value="Shower"> Shower
        <input type="radio" name="facilitate" {{ old('facilitate',$hotel->facilitate=='Pool' ? 'checked' : '')}} value="Pool"> Pool 
        <input type="radio" name="facilitate" {{ old('facilitate',$hotel->facilitate=='Breakfast' ? 'checked' : '')}} value="Breakfast"> Breakfast 
        <input type="radio" name="facilitate" {{ old('facilitate',$hotel->facilitate=='Wifi' ? 'checked' : '')}} value="Wifi"> Wifi
        <input type="radio" name="facilitate" {{ old('facilitate',$hotel->facilitate=='Double Bed' ? 'checked' : '')}} value="Double Bed">  Double Bed
        <input type="radio" name="facilitate" {{ old('facilitate',$hotel->facilitate=='Refrigerator' ? 'checked' : '')}} value="Refrigerator"> Refrigerator
    </div>
    <div class="form-group">
        <label for="description">Description</label>
        <textarea class="form-control" id="description" name="description" rows="3">{{ $hotel->description }}></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>

@endsection