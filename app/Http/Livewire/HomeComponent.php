<?php

namespace App\Http\Livewire;

use App\Models\Slider;
use Livewire\Component;

class HomeComponent extends Component
{
    public function render()
    {
        $sliders = Slider::where('status', 1)->get();
        return view('livewire.home-component',['sliders' => $sliders])->layout('layouts.base');
    }
}
