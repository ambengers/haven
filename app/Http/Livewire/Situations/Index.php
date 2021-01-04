<?php

namespace App\Http\Livewire\Situations;

use Livewire\Component;
use App\Models\Situation;

class Index extends Component
{
    public $situations = [];

    public function render()
    {
        $this->situations = Situation::all();

        return view('livewire.situations.index');
    }
}
