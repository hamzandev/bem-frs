<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class RootLayout extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public String $pageTitle,
        public String $title
    )
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('layouts.root-layout');
    }
}
