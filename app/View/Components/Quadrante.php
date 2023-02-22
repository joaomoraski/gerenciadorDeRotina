<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Quadrante extends Component
{
    public $numeroQuadrante;
    public $tituloQuadrante;
    public $listaTarefas;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($numeroQuadrante, $tituloQuadrante)
    {
        $this->numeroQuadrante = $numeroQuadrante;
        $this->tituloQuadrante = $tituloQuadrante;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.quadrante');
    }
}
