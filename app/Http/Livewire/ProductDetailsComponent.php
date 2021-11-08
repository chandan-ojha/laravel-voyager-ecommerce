<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ProductDetailsComponent extends Component
{
    // public $slug;

    // public function mount($slug)
    // {
    //    $this->slug = $slug;
    // }

    public function render()
    {
        
        return view('livewire.product-details-component')->layout('layouts.base');
    }
}
