<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class MailerliteForm extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public string $textColor = 'white',
        public string $buttonColor = 'red'
    )
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.mailerlite-form');
    }
}
