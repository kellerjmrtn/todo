<?php

namespace App\Livewire;

use Livewire\Component;

class Todo extends Component
{
    public string $title = 'My Tasks';

    public array $items = [
        ['title' => 'My Item 1', 'completed' => false],
        ['title' => 'My Item 2', 'completed' => true],
        ['title' => 'My Item 3', 'completed' => false],
    ];

    public function render()
    {
        return view('livewire.todo');
    }
}
