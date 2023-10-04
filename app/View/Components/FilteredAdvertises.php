<?php

namespace App\View\Components;

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
        $this->advertisesList = [
            [
                'image' => 'http://placehold.it/145x145',
                'title' => 'Tênis vans Baby - 1 ano',
                'price' => 'R$ 189,99',
                'href'  => '#'
            ],
            [
                'image' => 'http://placehold.it/145x145',
                'title' => 'Tênis vans Baby - 1 ano',
                'price' => 'R$ 189,99',
                'href'  => '#'
            ],
            [
                'image' => 'http://placehold.it/145x145',
                'title' => 'Tênis vans Baby - 1 ano',
                'price' => 'R$ 189,99',
                'href'  => '#'
            ],
            [
                'image' => 'http://placehold.it/145x145',
                'title' => 'Tênis vans Baby - 1 ano',
                'price' => 'R$ 189,99',
                'href'  => '#'
            ],
            [
                'image' => 'http://placehold.it/145x145',
                'title' => 'Tênis vans Baby - 1 ano',
                'price' => 'R$ 189,99',
                'href'  => '#'
            ],
            [
                'image' => 'http://placehold.it/145x145',
                'title' => 'Tênis vans Baby - 1 ano',
                'price' => 'R$ 189,99',
                'href'  => '#'
            ]
        ];
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
