<?php

namespace App\View\Components\form;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class FormLocation extends Component
{
    /**
     * Create a new component instance.
     */
    protected $data;
    public function __construct($data = null)
    {
        $this->data = $data;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.form.form-location', ['data' => $this->data]);
    }
}
