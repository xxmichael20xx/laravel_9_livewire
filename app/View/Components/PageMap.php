<?php

namespace App\View\Components;

use Illuminate\View\Component;

class PageMap extends Component
{
    /**
     * The page-map type
     *
     * @var string
     */
    public $type;

    /**
     * Create a new component instance.
     *
     * @param string $type The type of the component
     *
     * @return void
     */
    public function __construct(string $type)
    {
        $this->type = $type ?? 'style';
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.page-map');
    }
}
