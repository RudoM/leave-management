<?php

namespace App\Http\Livewire;

use App\Models\Request;
use Livewire\Component;

class Requests extends Component
{
    public $requests;

    public function mount()
    {
        $this->requests = Request::all();
    }

    public function apply()
    {
        return redirect('apply');
    }
    
    public function render()
    {


        return view('livewire.requests');
    }
}