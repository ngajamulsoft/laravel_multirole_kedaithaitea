@extends('layouts.app')
@section('content')
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <div class="header-title">
                            <h4 class="card-title">User Roles</h4>
                        </div>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('admin.role.store') }}" data-toggle="validator">
                            @csrf
                            <div class="row">
                                                              
                                    <div class="col-md-6">                      
                                        <div class="form-group">
                                            <label>Name *</label>
                                            <input type="text"
                                                name="name" 
                                                class="form-control 
                                                @error('name')
                                                    is-invalid
                                                @enderror" 
                                                placeholder="Enter Name" 
                                                value="{{ old('name') }}" 
                                                required autocomplete="name" autofocus>
                                            @error('name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>    
                                    
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Display Name *</label>
                                            <input 
                                            type="text" 
                                            name="display_name"
                                            class="form-control 
                                            @error('display_name')
                                                    is-invalid
                                            @enderror"  
                                            placeholder="Enter Display Name" 
                                            value="{{ old('display_name') }}"
                                            required>
                                            @error('display_name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div> 
                                
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Description *</label>
                                            <input 
                                            type="text" 
                                            name="description"
                                            class="form-control 
                                            @error('description')
                                                    is-invalid
                                            @enderror"  
                                            placeholder="Enter Description" 
                                            value="{{ old('description') }}"
                                            required>
                                            @error('description')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                <div class="card">
                                    <div class="card-body">
                                        <div class="form-group row">
                                            <label for="permissions" class="col-md-3 col-form-label text-md-right">{{ __('Permissions') }}</label>
                                            <div class="col-md-7">
                                                @if (count($permissions))
                                                    <div class="row">
                                                        @foreach ($permissions as $permission)
                                                            <div class="col-12 col-sm-6 col-md-4 mb-2">
                                                                <div class="form-check">
                                                                    <input
                                                                        class="form-check-input"
                                                                        type="checkbox"
                                                                        id="permission-{{ $permission->id }}"
                                                                        name="permissions_id[]"
                                                                        value="{{ $permission->id }}"
                                                                    >
                                                                    <label class="form-check-label" for="permission-{{ $permission->id }}">{{ $permission->display_name }}</label>
                                                                </div>
                                                            </div>
                                                        @endforeach
                                                    </div>
                                                @endif
                                                @error('permissions_id')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            
                            </div>                                
                                                 
                            <button type="submit" class="btn btn-primary mr-2">Add Role</button>
                        </form>
                    </div>
                </div>
            </div>

@endsection