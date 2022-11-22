 @extends('layouts.app')
 @section('content')
 <div class="col-4">
    @if(isset($driver) && count($driver) > 0)
      <div class="card">
        <img src="..." class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">{{ Str::ucfirst($driver['name'])  }}</h5>
          <p class="card-text">âge : {{ $driver['age'] }}</p>
          <p class="card-text">éxperiences : {{ $driver['experiences'] }}</p>
          <ul>
            @foreach ($driver['licence'] as $licence)
                <li class="d-inline">{{$licence}}</li>
            @endforeach
          </ul>
        </div>
      </div>
    @else
      <p>Not found</p>
    @endif
</div>
@endsection
