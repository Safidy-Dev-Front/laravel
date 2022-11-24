<div class="row">
    @if(count($cars) === 0)
      <p>No item here</p>
    @else
        @foreach ($cars as $car)
          <div class="col-4">
            <div class="card">
              <img src="..." class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">{{ Str::ucfirst($car->benchmark. ' '. $car->name)  }}</h5>
                <p class="card-text">Ref: {{ $car->id}}</p>
                <p class="card-text">{{ $car->description }}</p>
                <a href="{{URL::route('cars.single',['id' => $car->id])}}" class="btn btn-primary">View</a>
              </div>
            </div>
          </div>
        @endforeach
    @endif
</div>
