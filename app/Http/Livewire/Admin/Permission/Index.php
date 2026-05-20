<?php

namespace App\Http\Livewire\Admin\Permission;

use App\Models\Permission;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;
    public $paginate = 10;
    public $search;
    public $formVisible;
    public $formUpdate = false;
    protected $updatesQueryString = [
        ['search' => ['except' => '']],
    ];

    protected $listeners = [
        'formClose' => 'formCloseHandler',
        'permissionStored' => 'permissionStoredHandler',
        'deleteConfirmed' => 'deletePermission',
        'permissionUpdated' => 'permissionUpdatedHandler',
    ];

    protected $paginationTheme = 'bootstrap';
    public function mount(){
        $this->search = request()->query('search', $this->search);
    }
    public function render()
    {
        return view('livewire.admin.permission.index',[
            'permissions' => $this->search === null
                ?Permission::latest()->paginate($this->paginate)
                :Permission::latest()->where('name', 'like', "%{$this->search}%")
                ->paginate($this->paginate)
        ]);
    }

    public function formCloseHandler()
    {
        $this->formVisible = false;
    }

    public function createUserPermission()
    {
        $this->formUpdate = false;
        $this->formVisible = true;
    }

    public function permissionStoredHandler()
    {
        $this->formVisible = false;
        session()->flash('message', 'Permission created successfully.');
        session()->flash('type', 'success');
    }

    public function editPermission($permissionId)
    {
        $this->formVisible = true;
        $this->formUpdate = true;
        $permission = Permission::find($permissionId);
        $this->emit('editPermission', $permission);
    }

    public function permissionUpdatedHandler()
    {
        $this->formVisible = false;
        session()->flash('message', 'Permission updated successfully.');
        session()->flash('type', 'success');
    }

    public function confirmDelete($permissionId){
        $this->dispatchBrowserEvent('show-delete-confirmation', ['id' => $permissionId]);
    }

    public function deletePermission($permissionId){
        $permission = Permission::find($permissionId);

        if($permission){
            $permission->delete();
            session()->flash('message', 'Permission deleted successfully.');
            session()->flash('type', 'success');
        }
        
    }
}
