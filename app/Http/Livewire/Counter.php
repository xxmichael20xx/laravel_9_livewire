<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Counter extends Component
{
    public $count = 1;

    public function render()
    {
        return view('livewire.counter');
    }

    /**
     * Increase the $count value
     *
     * @returns void
     */
    public function increment(): void
    {
        $this->count++;
    }

    /**
     * Decrease the $count value
     *
     * @returns void
     */
    public function decrement(): void
    {
        $this->count--;
    }
}
