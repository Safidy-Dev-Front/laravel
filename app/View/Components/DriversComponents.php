<?php

namespace App\View\Components;

use Illuminate\View\Component;

class DriversComponents extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(public array $drivers)
    {
        $this->drivers = $drivers;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.drivers-components');
    }
}
