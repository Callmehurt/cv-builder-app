<?php

namespace App\Livewire\Navigation;

use Livewire\Component;

class SearchResult extends Component
{

    public $resultCount = 20;

    public function render()
    {
        return view('livewire.navigation.search-result');
    }
}
