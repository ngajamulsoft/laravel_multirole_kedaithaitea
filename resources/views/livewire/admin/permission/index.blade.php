<div>
    <div class="col-lg-12">
        @if ($formVisible)
            
            @if (! $formUpdate)
                @livewire('admin.permission.create')
            @else
                @livewire('admin.permission.update')
            @endif
           
        @endif
        <div class="d-flex flex-wrap align-items-center justify-content-between mb-4">
            <div class="d-flex align-items-center gap-3">
            <h4 class="col-md-6 mb-3">User Permission</h4>
            <input type="text" class="col-md-6 form-control" placeholder="Search..." wire:model="search">
            </div>
            
            <button wire:click="createUserPermission" class="btn btn-primary btn-sm add-list"><i class="las la-plus mr-3"></i>Add Permission</button>
        </div>

        <div class="col-md-6">
            @if(session()->has('message'))
                    
                    <div class="alert alert-{{ session('type') }}" role="alert">
                        <div class="iq-alert-text">{{ session('message') }}</div>
                     </div>
            @endif
        </div>
    </div>
    <div class="col-lg-12">
        <div class="table-responsive rounded mb-3">
        <table class="data-table table mb-0 tbl-server-info">
            <thead class="bg-white text-uppercase">
                <tr class="ligth ligth-data">
                    <th>
                        <div class="checkbox d-inline-block">
                            <input type="checkbox" class="checkbox-input" id="checkbox1">
                            <label for="checkbox1" class="mb-0"></label>
                        </div>
                    </th>
                    <th>Name</th>
                    <th>Display Name</th>
                    <th>Action</th>
                    
                    
                </tr>
            </thead>
            <tbody class="ligth-body">
                @forelse($permissions as $permission)
                <tr>
                    <td>
                        <div class="checkbox d-inline-block">
                            <input type="checkbox" class="checkbox-input" id="checkbox2">
                            <label for="checkbox2" class="mb-0"></label>
                        </div>
                    </td>
                    <td>{{ $permission->name }}</td>
                    <td>{{ $permission->display_name }}</td>
                    <td>
                        <div class="d-flex align-items-center justify-content-center gap-2">
                        
                     
                        <button wire:click="editPermission({{ $permission->id }})" class="badge bg-primary border-0 mr-2" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit" ><i class="ri-pencil-line mr-0"></i>
                        </button>
                        <button wire:click="confirmDelete({{ $permission->id }})" class="badge bg-danger border-0"><i class="ri-delete-bin-line border-0 mr-0"></i>
                        </button>
                        
                        </div>
                    </td>
                </tr>
                @empty
                    <tr>
                        <td colspan="4" class="text-center">
                            User permission tidak ditemukan
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
        {{-- {{ $permissions->links('vendor.pagination.bootstrap-custom') }} --}}
        {{ $permissions->links() }}
        </div>
    </div>
</div>

<script>
        window.addEventListener('show-delete-confirmation', event => {
            Swal.fire({
                title: 'Are you sure?',
                text: 'Permission akan dihapus permanen.',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#d33',
                cancelButtonColor: '#3085d6',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    Livewire.emit('deleteConfirmed', event.detail.id);
                }
            });
        });
    </script>
