<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class BlogCard extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public ?string $title = "Title",
        public ?string $tag = "TAG",
        public ?string $date = "DD MM YYYY",
        public ?string $description = "Loerm Ipsum...",
        public ?string $thumbnail = "https://placehold.co/400x300",
        public ?string $thumbnail_alt = "thumbnail alt",
    ){
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.blog-card');
    }
}
