<?php

namespace App\Livewire;

use App\Models\Category;
use Livewire\Component;

class AdCreate extends Component
{
    public $title;
    public $description;
    public $price;
    public $negotiable;
    public $category_id;

    protected $rules = [
        'title' => 'required|min:8|max:255',
        'price' => 'required|numeric',
        'negotiable' => 'required|boolean',
        'description' => 'required|min:8|max:255',
        'category_id' => 'required|exists:categories,id'
    ];

    public function render()
    {
        $categories = Category::all();

        return view('livewire.ad-create', compact('categories'));
    }

    public function save()
    {
        $this->validate();

        return 'saved';
    }
}
