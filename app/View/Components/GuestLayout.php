<?php

namespace App\View\Components;

use Illuminate\View\Component;

class GuestLayout extends Component
{
    public function __construct(public String $title = '')
    {
        if ($title)
            $this->title .= ' - ' . config('app.name');
        else
            $this->title = config('app.name');
    }

    /**
     * Get the view / contents that represents the component.
     *
     * @return \Illuminate\View\View
     */
    public function render()
    {
        return view('layouts.guest');
    }
}
