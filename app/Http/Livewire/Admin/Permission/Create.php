<?php

namespace App\Http\Livewire\Admin\Permission;

use App\Models\Permission;
use Livewire\Component;

class Create extends Component
{
    public $name;
    public $display_name;
    public $description;


    public function render()
    {
        return view('livewire.admin.permission.create');
    }

    public function store()
    {
        $this->validate([
            'name' => 'required|unique:permissions,name',
            'display_name' => 'required',
            'description' => 'required',
        ]);

        Permission::create([
            'name'=>$this->name,
            'display_name'=>$this->display_name,
            'description'=>$this->description,
        ]);

        $this->emit('permissionStored');
    }
}
