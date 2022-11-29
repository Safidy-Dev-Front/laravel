@extends('layouts.app')

@section('content')
    <form action="{{ URL::route('cars.store') }}" method="post">
        @csrf
        <div class="row input-group">
            <label for="">Car Name</label>
            <input class="form-control" type="text" name="name" id="">
            @error('name')
                <span class="text-error">{{ $message }}</span>
            @enderror
        </div>
        <div class="row input-group">
            <label for="">Benchmark</label>
            <input class="form-control" type="text" name="benchmark" id="">
            @error('benchmark')
                <span class="text-error">{{ $message }}</span>
            @enderror
        </div>
        <div class="row input-group">
            <label for="">Year</label>
            <input class="form-control" type="text" name="year" id="">
            @error('year')
                <span class="text-error">{{ $message }}</span>
            @enderror
        </div>
        <div class="row input-group">
            <label for="">Color</label> White <input type="radio" name="color" id="" value="white">
            Black <input type="radio" name="color" id="" value="black">
            @error('color')
                <span class="text-error">{{ $message }}</span>
            @enderror
        </div>
        <div class="row input-group">
            <label for="">Description</label>
            <textarea name="description" id="" cols="30" rows="10"></textarea>
            @error('description')
                <span class="text-error">{{ $message }}</span>
            @enderror
        </div>

        @if(isset($drivers))
        <div class="row input-group">
          <label for="">Driver</label>
          <select name="driver_id" id="">
            @foreach ($drivers as $driver)
            <option value="{{$driver->id}}">{{$driver->fullname}}</option>
            @endforeach
          </select>
        </div>
        @endif

        <div class="row input-group">
            <input type="submit" class="col-2 btn btn-primary" value="Submit">
        </div>
    </form>
@endsection
