<div class="row">
          @if(count($drivers) === 0)
            <p>No item here</p>
          @else
              @foreach ($drivers as $driver)
                <div class="col-4">
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
                      <a href="{{URL::route('driver.single', ['id'=>$driver['id']])}}" class="btn btn-primary">View</a>
                    </div>
                  </div>
                </div>
              @endforeach
          @endif
      </div>
