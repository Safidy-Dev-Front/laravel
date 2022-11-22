 @extends('layouts.app') @section('content')
<div>
  <h2>Single car</h2>

  <h5 class="card-title">{{ Str::ucfirst($car['benchmark']. ' '. $car['name']) }}</h5>
  <p class="card-text">Ref: {{ $car['id'] }}</p>
  <p class="card-text">{{ $car['description'] }}</p>
</div>
@endsection