<?php

namespace App\Livewire;

use Livewire\Component;

class Todo extends Component
{
    public string $title;
    public string $newItem = '';

    public array $items = [];
    public array $completed = [];

    public function mount(string $title)
    {
        $this->title = $title;
    }

    /**
     * Move an item from the to do array to the completed array
     *
     * @param int $id
     * @return void
     */
    public function completeItem(int $id)
    {
        if (isset($this->items[$id])) {
            $this->completed[] = $this->items[$id];
            unset($this->items[$id]);
        }
    }

    /**
     * Move an item from the completed array to the to do array
     *
     * @param int $id
     * @return void
     */
    public function returnItem(int $id)
    {
        if (isset($this->completed[$id])) {
            $this->items[] = $this->completed[$id];
            unset($this->completed[$id]);
        }
    }

    /**
     * Add an item to the to do array. Only adds if real content
     *
     * @return void
     */
    public function addItem()
    {
        if (trim($this->newItem)) {
            $this->items[] = trim($this->newItem);
            $this->newItem = '';
        }
    }

    /**
     * Delete an item from the completed array
     *
     * @param int $id
     * @return void
     */
    public function deleteItem(int $id)
    {
        unset($this->completed[$id]);
    }

    public function render()
    {
        return view('livewire.todo');
    }
}
