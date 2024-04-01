<?php

namespace App\View\Components;

use App\Models\Advertise;
use Illuminate\View\Component;

class FilteredAdvertises extends Component
{
    public $advertisesList;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->advertisesList = Advertise::all();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.filtered-advertises');
    }
}
