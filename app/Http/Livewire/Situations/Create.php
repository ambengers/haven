<?php

namespace App\Http\Livewire\Situations;

use Livewire\Component;
use App\Models\Situation;

class Create extends Component
{
    public $title;
    public $type;
    public $donationInformation;

    public function render()
    {
        return view('livewire.situations.create');
    }

    public function create()
    {
        Situation::create([
            'title'                => $this->title,
            'type'                 => $this->type,
            'donation_information' => $this->donationInformation,
        ]);
    }
}
