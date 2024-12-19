<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class FileInput extends Component
{
    public $id;
    public $name;
    public $value;
    public $required;
    public $label;

    public function __construct($id, $name, $value = null, $required = false, $label = null)
    {
        $this->id = $id;
        $this->name = $name;
        $this->value = $value;
        $this->required = $required;
        $this->label = $label;
    }

    public function render()
    {
        return view('components.file-input');
    }
}
