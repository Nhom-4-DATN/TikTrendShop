<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\View\Components\Form\SelectProvinces;
use App\View\Components\address\AdderssList;
use App\View\Components\form\FormLocation;

class ComponentController extends Controller
{
    function renderProvinces()
    {
        $htmlSelect =  (new SelectProvinces())->render();
        return $htmlSelect;
    }
    function renderListLocation()
    {
        $html =  (new AdderssList())->render();
        return $html;
    }
    function renderFormLocation()
    {
        $html =  (new FormLocation())->render();
        return $html;
    }
}
