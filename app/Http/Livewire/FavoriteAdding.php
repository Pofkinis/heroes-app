<?php

namespace App\Http\Livewire;

use Livewire\Component;

class FavoriteAdding extends Component
{
    public $hero;
    public $favorite = false;

    public function addOrRemove(){
        if(!auth()->user()->heroes->contains($this->hero)){
            $this->hero->users()->attach(auth()->user());
            $this->favorite = true;
        }
        else{
            $this->hero->users()->detach(auth()->user());
            $this->favorite = false;
        }
        session()->flash('message', 'Post successfully updated.');
    }


    public function mount(){
        $this->favorite = auth()->user()->heroes->contains($this->hero) ?? false;
    }
    public function render()
    {
        return view('livewire.favorite-adding');
    }
}
