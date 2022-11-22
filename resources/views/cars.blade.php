@extends('layouts.app')

@section('content')
<div class="container">
  <h2>Our cars</h2>
  <x-cars-list :cars="$cars" />
</div>
@endsection
