<?php

namespace App\Livewire;

use App\Models\Category;
use Livewire\Component;
use Livewire\WithFileUploads;

class AdCreate extends Component
{
    use WithFileUploads;

    public $title;
    public $description;
    public $price;
    public $negotiable;
    public $category_id;
    public $photos = [];

    protected $rules = [
        'photos' => 'required|array|min:1|max:5',
        'photos.*' => 'image|max:2048',
        'title' => 'required|min:8|max:255',
        'price' => 'required|numeric',
        'negotiable' => 'boolean',
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
