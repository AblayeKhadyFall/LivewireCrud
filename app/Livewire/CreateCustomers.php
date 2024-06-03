<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Customer;

class CreateCustomers extends Component
{
    public $name = '';
    public $email = '';
    public $phone = '';

    public function render()
    {
        return view('livewire.create-customers');
    }
    public function save()
    {
        $validated = $this->validate([
            'name' => 'required|max:255',
            'email' => 'required|email|unique:customers|max:255',
            'phone' => 'required|unique:customers|max:255'
        ]);
        Customer::create($validated);
        $this->reset();

        session()->flash('success','Customer Creatted Successfully');
        return $this->redirect('/customers',navigate:true);
    }
}
