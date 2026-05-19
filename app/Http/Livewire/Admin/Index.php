<?php

namespace App\Http\Livewire\Admin;

use App\Models\User;
use Livewire\Component;

class Index extends Component
{
    public $user;
    
    public function mount(User $user)
    {
        $this->user = $user;
    }

    public function toggleUser()
    {

        $this->user->update([
            'is_active' =>!$this->user->is_active
        ]);
        $this->user->refresh();
    }
    public function render()
    {   
        return view('livewire.admin.index');
    }
}
