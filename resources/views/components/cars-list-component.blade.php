<div>
    @if(count($cars) === 0)
        <p>No item here</p>
    @else
        <ul>
            @foreach ($cars as $car)
                <li
                    @class([
                        "color-white" =>  $car['color'] === "white"
                    ])
                >{{ $car['benchmark']. ' '. $car['name']  }}</li>
            @endforeach
        </ul>
    @endif
</div>
