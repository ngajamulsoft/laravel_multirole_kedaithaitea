@extends('layouts.app')
@section('content')
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <div class="header-title">
                            <h4 class="card-title">Edit Users</h4>
                        </div>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('admin.user.update', $user->id) }}" data-toggle="validator">
                            @csrf @method('PUT')
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
                                                value="{{ $user->name }}" 
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
                                            <label>Username *</label>
                                            <input 
                                            type="text" 
                                            name="username"
                                            class="form-control 
                                            @error('username')
                                                    is-invalid
                                            @enderror"  
                                            placeholder="Enter Username" 
                                            value="{{ $user->username }}"
                                            required>
                                            @error('username')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div> 
                                
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Email *</label>
                                            <input 
                                            type="text" 
                                            name="email"
                                            class="form-control 
                                            @error('email')
                                                    is-invalid
                                            @enderror"  
                                            placeholder="Enter Email" 
                                            value="{{ $user->email }}"
                                            required>
                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Role *</label>
                                            <select name="role_id" id="role_id" class="form-control @error('role_id') is-invalid @enderror">
                                                @if (count($roles))
                                                @foreach ($roles as $role)
                                                    <option value="{{ $role->id }}" {{ $role->id == $user->roles[0]->id ? 'selected="selected"' : '' }}>{{ $role->display_name }}</option>
                                                @endforeach
                                                @endif
                                            </select>
                                            @error('role_id')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                
                        </div>                                
                                                 
                            <button type="submit" class="btn btn-primary mr-2">Update User</button>
                        </form>
                    </div>
                </div>
            </div>

@endsection