@extends('layouts.app')
@section('main')

<form action="{{ url('hotel/add') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="container">
    <div class="form-group">
        <input type="file" class="form-control" id="image" name="image">
    </div>
    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" class="form-control" id="name" name="name" placeholder="Name">
    </div>
    <div class="form-group">
        <label for="address">Address</label>
        <input type="text" class="form-control" id="address" name="address" placeholder="Address">
    </div>
    <div class="form-group">
        <label for="price">Price</label>
        <input type="text" class="form-control" id="price" name="price" placeholder="Price">
    </div>
    <div class="form-group">
        <label for="facilitate" multiple="multiple">Facilitate</label>
        <input type="radio" name="facilitate" value="Bathtub"> Bathtub
        <input type="radio" name="facilitate" value="Pool"> Pool 
        <input type="radio" name="facilitate" value="Breakfast"> Breakfast 
        <input type="radio" name="facilitate" value="Wifi"> Wifi
        <input type="radio" name="facilitate" value="Double Bed">  Double Bed
        <input type="radio" name="facilitate" value="Refrigerator"> Refrigerator
    </div>
    <div class="form-group">
        <label for="description">Description</label>
        <textarea class="form-control" id="description" name="description" rows="3"></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
    </div>
@endsection