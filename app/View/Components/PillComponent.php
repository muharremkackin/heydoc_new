<?php

namespace App\View\Components;

use Illuminate\View\Component;

class PillComponent extends Component
{
    public $color;
    public $content;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($color, $content)
    {
        $this->color = $color;
        $this->content = $content;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.pill-component');
    }
}
