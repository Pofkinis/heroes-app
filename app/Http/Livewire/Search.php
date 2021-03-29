<?php

namespace App\Http\Livewire;

use App\Models\Hero;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Http;
use Livewire\Component;

class Search extends Component
{
    public $query = "";
    public $response = true;

    public function render()
    {
        $searchResults = null;

        if(strlen($this->query) >= 2){
            $searchResults = Hero::whereNameLike($this->query)->get();
        }

        return view('livewire.search', [
            'searchResults' => collect($searchResults)->take(7),
        ]);
    }
}
