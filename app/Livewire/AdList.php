<?php

namespace App\Livewire;

use App\Models\Advertise;
use App\Models\Category;
use App\Models\State;
use Livewire\Component;
use Livewire\WithPagination;

class AdList extends Component
{
    use WithPagination;

    public $categories;
    public $states;
    public $categorySelected;
    public $stateSelected;
    public $textSearch;

    public function render()
    {
        $query = Advertise::query();

        if ($this->categorySelected) {
            $query->where('category_id', $this->categorySelected);
        }

        if ($this->stateSelected) {
            $query->where('state_id', $this->stateSelected);
        }

        if ($this->textSearch) {
            $query->where('title', 'like', '%' . $this->textSearch . '%');
        }

        return view('livewire.ad-list', [
            'filteredAds' => $query->paginate(10)
        ]);
    }

    public function updated()
    {
        $this->resetPage();
    }

    public function mount()
    {
        $this->categories = Category::all();
        $this->states = State::all();
    }
}
