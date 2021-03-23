<?php

namespace App\View\Components\Dashboard\Layouts;

use Illuminate\View\Component;

class Guest extends Component
{
    /**
     * Get the view / contents that represents the component.
     *
     * @return \Illuminate\View\View
     */
    public function render()
    {
        return view('dashboard.components.layouts.guest');
    }
}