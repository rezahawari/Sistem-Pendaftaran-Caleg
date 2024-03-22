<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Http\Livewire\DocView;

class SideBar extends Component
{

    // public $count = 0;

    // public function increment()
    // {
    //     $this->count++;
    // }

    public function render()
    {
        return view('livewire.side-bar');
    }

    public function goDoc()
    {
        return redirect('/doc');
    }
}
