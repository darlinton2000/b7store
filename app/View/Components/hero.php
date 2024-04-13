<?php

namespace App\View\Components;

use App\Models\Category;
use App\Models\State;
use Illuminate\View\Component;

class hero extends Component
{
    public $states;
    public $categories;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->states = State::all();
        $this->categories = Category::all();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.hero');
    }
}
