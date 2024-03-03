<?php

namespace App\View\Components;

use Illuminate\View\Component;

class InputFile extends Component
{
    public $name;
    public $value;

    public function __construct($name, $value = null)
    {
        $this->name = $name;
        $this->value = $value;
    }

    public function render()
    {
        return view('components.input-file');
    }
}
