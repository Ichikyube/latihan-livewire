<?php

namespace App\Http\Livewire\Cards;

use Livewire\Component;

class Products extends Component
{
    public $product;

    public function diskon() {
        $this->product['pricing'] = $this->product['pricing'] * 70/100;

    }
    public function render()
    {
        $this->diskon();
        return view('livewire.cards.products', $this->product);
    }
}
