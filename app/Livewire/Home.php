<?php

namespace App\Livewire;

use App\Models\Product;
use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('layouts.home')]
class Home extends Component
{
    public function render()
    {
        return view('home', [
            'products' => Product::all()
        ]);
    }
}
