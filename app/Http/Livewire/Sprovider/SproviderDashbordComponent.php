<?php

namespace App\Http\Livewire\Sprovider;

use Livewire\Component;

class SproviderDashbordComponent extends Component
{
    public function render()
    {
        return view('livewire.sprovider.sprovider-dashbord-component')->layout('layouts.base');
    }
}
