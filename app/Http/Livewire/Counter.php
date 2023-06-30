<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Counter extends Component
{
    public float $points = 0;
    public float $increment = 1;
    public float $cost = 10;

    public function increment()
    {
        $this->points += round($this->increment,1);
    }

    public function upgradeIncrement()
    {
        if(round($this->points,1) - round($this->cost, 1) >= 0.0) {
            $this->increment = round($this->increment * 1.1, 1);
            $this->points = round($this->points - $this->cost, 1);
            $this->cost = round($this->cost * 1.5, 1);
        }
    }

    public function render()
    {
        return view('livewire.counter');
    }
}
