<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Service;

class Services extends Component
{


    public $chosenServices = [];
    public $services = [];



    public function mount()
    {
        $this->services = Service::get();
        $this->chosenServices = [
            ['id' => '']
        ];
    }

    public function addService()
    {
        $this->chosenServices[] =
            ['id' => ''];
    }

    public function removeService($index)
    {
        unset($this->chosenServices[$index]);
        return array_values($this->chosenServices);
    }

    public function render()
    {
        return view('livewire.services');
    }
}
