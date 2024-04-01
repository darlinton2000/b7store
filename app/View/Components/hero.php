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
            ['value' => 'AC', 'name' => 'Acre'],
            ['value' => 'AL', 'name' => 'Alagoas'],
            ['value' => 'AP', 'name' => 'Amapá'],
            ['value' => 'AM', 'name' => 'Amazonas'],
            ['value' => 'BA', 'name' => 'Bahia'],
            ['value' => 'CE', 'name' => 'Ceará'],
            ['value' => 'DF', 'name' => 'Distrito Federal'],
            ['value' => 'ES', 'name' => 'Espírito Santo'],
            ['value' => 'GO', 'name' => 'Goiás'],
            ['value' => 'MA', 'name' => 'Maranhão'],
            ['value' => 'MT', 'name' => 'Mato Grosso'],
            ['value' => 'MS', 'name' => 'Mato Grosso do Sul'],
            ['value' => 'MG', 'name' => 'Minas Gerais'],
            ['value' => 'PA', 'name' => 'Pará'],
            ['value' => 'PB', 'name' => 'Paraíba'],
            ['value' => 'PR', 'name' => 'Paraná'],
            ['value' => 'PE', 'name' => 'Pernambuco'],
            ['value' => 'PI', 'name' => 'Piauí'],
            ['value' => 'RJ', 'name' => 'Rio de Janeiro'],
            ['value' => 'RN', 'name' => 'Rio Grande do Norte'],
            ['value' => 'RS', 'name' => 'Rio Grande do Sul'],
            ['value' => 'RO', 'name' => 'Rondônia'],
            ['value' => 'RR', 'name' => 'Roraima'],
            ['value' => 'SC', 'name' => 'Santa Catarina'],
            ['value' => 'SP', 'name' => 'São Paulo'],
            ['value' => 'SE', 'name' => 'Sergipe'],
            ['value' => 'TO', 'name' => 'Tocantins']
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
