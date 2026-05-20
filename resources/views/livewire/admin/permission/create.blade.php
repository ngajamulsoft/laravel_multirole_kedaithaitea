<div>
    
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <div class="header-title">
                            <h4 class="card-title">Input User Permission</h4>
                        </div>
                    </div>
                    <div class="card-body">
                        <form wire:submit.prevent="store" method="POST" data-toggle="validator">
                            <div class="form-group">

                                <div class="form-row">
                                    <div class="col mb-3">
                                        <input name="name" wire:model="name" type="text" class="form-control @error('name')
                                            is-invalid @enderror" placeholder="Name">
                                        @error('name')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="col mb-3">
                                        <input name="display_name" wire:model="display_name" type="text" class="form-control @error('display_name')
                                        is-invalid @enderror" placeholder="Display Name">
                                        @error('display_name')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group">

                                    <div class="form-row">
                                        <div class="col mb-3">
                                            <input wire:model="description" type="text" class="form-control @error('description')
                                            is-invalid @enderror" placeholder="Description">
                                            @error('description')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>

                                </div>
                    </div>                              
                                                 
                            <button type="submit" class="btn btn-primary btn-sm mr-2">Add Permission</button>
                            <button wire:click="$emit('formClose')" type="button" class="btn btn-sm btn-secondary">Close</button>
                        </form>
                    </div>
                </div>
            </div>


</div>
