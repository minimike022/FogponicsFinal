<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
class SidebarNavigation extends Component
{
    public function render()
    {
        return view('livewire.sidebar-navigation');
    }

}
