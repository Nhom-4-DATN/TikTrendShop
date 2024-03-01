<?php

namespace App\View\Components\address;

use App\Models\User;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\Component;

class AdderssList extends Component
{
    /**
     * Create a new component instance.
     */
    protected object $UserModel;
    public function __construct()
    {
        $this->UserModel = new User();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        $listAddress = $this->UserModel->find(Auth::id())->hasManyAddresses;
        return view('components.address.adderss-list', ['listAddress' => $listAddress]);
    }
}
