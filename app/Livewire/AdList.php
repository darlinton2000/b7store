<?php

namespace App\Livewire;

use App\Models\Advertise;
use App\Models\Category;
use App\Models\State;
use Livewire\Component;

class AdList extends Component
{
    public $filteredAds;
    public $categories;
    public $states;
    public $categorySelected;
    public $stateSelected;
    public $textSearch;

    public function render()
    {
        $this->filteredAds = Advertise::all();

        return view('livewire.ad-list');
    }

    public function mount()
    {
        $this->categories = Category::all();
        $this->states = State::all();
    }
}
