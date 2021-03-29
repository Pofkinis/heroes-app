<?php

namespace App\Http\Livewire;

use Livewire\Component;

class HeroMenu extends Component
{
    public const POWER_STATS = 0;
    public const BIOGRAPHY = 1;

    public $view = self::POWER_STATS;
    public $name;
    public $stats;
    public $hero;

    public function render()
    {
        return view('livewire.hero-menu');
    }
}
