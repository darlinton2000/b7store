<?php

namespace App\View\Components;

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
        // Carregando todos os estados do Brasil
        $this->states = [
            ['value' => 'AC', 'name' => 'ACRE'],
            ['value' => 'MG', 'name' => 'MINAS GERAIS'],
            ['value' => 'SP', 'name' => 'SÃO PAULO']
        ];

        // Carregando categorias
        $this->categories = [
            ['value' => 'categoria1', 'name' => 'Categoria 1'],
            ['value' => 'categoria2', 'name' => 'Categoria 2'],
        ];
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
