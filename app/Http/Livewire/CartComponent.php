<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Cart;
class CartComponent extends Component
{
      //increase cart quantity
      public function increaseQuantity($rowId)
      {
          $product = Cart::get($rowId);
          $qty = $product->qty + 1;
          Cart::update($rowId, $qty);
          
      }

    //decrease cart quantity
     public function decreaseQuantity($rowId)
     {
        $product = Cart::get($rowId);
        $qty = $product->qty - 1;
        Cart::update($rowId, $qty);
     }

    //remove product from cart 
     public function destroy($rowId)
     {
        Cart::remove($rowId);
        session()->flash('success_message', 'Item has been removed');
     }

     //remove all product from cart 
     public function destroyAll()
     {
        Cart::destroy();
        
     }

    public function render()
    {
        return view('livewire.cart-component')->layout('layouts.base');
    }
}

