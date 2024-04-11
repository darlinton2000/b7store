<?php

namespace App\Livewire;

use App\Models\Advertise;
use Livewire\Component;

class AdList extends Component
{
    public $filteredAds;

    public function render()
    {
        return view('livewire.ad-list');
    }

    public function mount()
    {
        $this->filteredAds = Advertise::all();
    }
}
