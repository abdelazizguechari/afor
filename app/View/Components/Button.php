<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Button extends Component
{
    public $type;
    public $size;
    public $color;

    /**
     * Create a new component instance.
     */
    public function __construct($type = 'button', $size = 'md', $color = 'primary')
    {
        $this->type = $type;
        $this->size = $size;
        $this->color = $color;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render()
    {
        return view('components.button');
    }
}
