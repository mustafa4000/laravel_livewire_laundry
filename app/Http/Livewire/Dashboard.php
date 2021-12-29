<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Dashboard extends Component
{
    public function render()
    {
        // dd(auth()->user()->karyawan->hp);
        return view('livewire.dashboard');
    }
}
