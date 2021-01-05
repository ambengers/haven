<?php

namespace App\Http\Livewire\Situations;

use Livewire\Component;
use App\Models\Situation;
use App\Filters\SituationFilters;

class Index extends Component
{
    public $search;

    protected $queryString = ['search'];

    public $situations;

    public function render()
    {
        $filters = app(SituationFilters::class)->parameters([
            'search' => $this->search,
        ]);

        $this->situations = Situation::filter($filters);

        return view('livewire.situations.index');
    }
}
