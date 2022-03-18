<?php

namespace App\View\Components;

use Illuminate\View\Component;

class TablerLayout extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(public String $title = '')
    {
        if ($title)
            $this->title .= ' - ' . config('app.name');
        else
            $this->title = config('app.name');
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('layouts.tabler');
    }
}
