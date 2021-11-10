<?php

namespace App\Http\Livewire;

use App\Models\Product;
use App\Models\Slider;
use Livewire\Component;

class HomeComponent extends Component
{
    public function render()
    {
        $sliders = Slider::where('status', 1)->get();
        $lproducts = Product::orderBy('created_at', 'DESC')->get()->take(8);
        return view('livewire.home-component',['sliders' => $sliders,'lproducts' => $lproducts])->layout('layouts.base');
    }
}
