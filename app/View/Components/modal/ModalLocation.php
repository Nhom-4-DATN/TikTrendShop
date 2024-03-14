<?php

namespace App\View\Components\modal;

use App\Models\Address;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ModalLocation extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        $isDefaultChecked = Address::count() > 0 ? '' : 'checked';
        return view('components.modal.modal-location', ['isDefaultChecked ' => $isDefaultChecked]);
    }
}
