<?php

namespace App\View\Components;

use Illuminate\View\Component;

class ContentLayout extends Component
{
    public $header = '';

    public function __construct($header = '')
    {
        $this->header = $header;
    }

    public function render()
    {
        return view('layouts.content');
    }
}
