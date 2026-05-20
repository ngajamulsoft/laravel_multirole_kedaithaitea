<?php

namespace App\Http\Livewire\Admin\Permission;

use App\Models\Permission;
use Livewire\Component;

class Update extends Component
{
    public $permissionId;
    public $name;
    public $display_name;
    public $description;

    protected $listeners = [
        'editPermission' => 'editPermissionHandler'
    ];
    public function render()
    {
        return view('livewire.admin.permission.update');
    }

    public function editPermissionHandler($permission){
        $this->permissionId = $permission['id'];
        $this->name = $permission['name'];
        $this->display_name = $permission['display_name'];
        $this->description = $permission['description'];
    }

    public function update()
    {
        $this->validate([
            'name'=>'required|unique:permissions,name,'.$this->permissionId,
            'display_name'=>'required',
            'description'=>'required',
        ]);

        $permission = Permission::find($this->permissionId);
        $permission->update([
            'name'=>$this->name,
            'display_name'=>$this->display_name,
            'description'=>$this->description,
        ]);

        $this->emit('permissionUpdated');
    }
    
}
