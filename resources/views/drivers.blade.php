@extends('layouts.app')
@section('content')
    <div class="container">
        <h1>Drivers</h1>
        <x-drivers-list :drivers="$drivers"/>
    </div>
@endsection
