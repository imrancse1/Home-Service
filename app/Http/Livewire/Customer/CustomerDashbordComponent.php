<?php

namespace App\Http\Livewire\Customer;

use Livewire\Component;

class CustomerDashbordComponent extends Component
{
    public function render()
    {
        return view('livewire.customer.customer-dashbord-component')->layout('layouts.base');
    }
}
