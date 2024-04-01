<?php

namespace App\Livewire;

use Livewire\Component;

class Gallery extends Component
{
    public $images;
    public $featuredUrl;

    public function render()
    {
        return view('livewire.gallery');
    }

    public function mount($images)
    {
        $this->images = $images;
        $this->featuredUrl = $images->where('featured', true)->first()->url ?? 'http://placehold.it/500x500';
    }

    public function setFeatured(string $url)
    {
        $this->featuredUrl = $url;
    }
}
