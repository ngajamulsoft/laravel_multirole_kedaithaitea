@extends('layouts.app')
@section('content')
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <div class="header-title">
                            <h4 class="card-title">Add Users</h4>
                        </div>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('admin.user.store') }}" data-toggle="validator">
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
                                            <label>Username *</label>
                                            <input 
                                            type="text" 
                                            name="username"
                                            class="form-control 
                                            @error('username')
                                                    is-invalid
                                            @enderror"  
                                            placeholder="Enter Username" 
                                            value="{{ old('username') }}"
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
                                            value="{{ old('email') }}"
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
                                                    <option value="{{ $role->id }}">{{ $role->display_name }}</option>
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
                                
                                    <div class="col-md-6">                      
                                        <div class="form-group">
                                            <label>Password *</label>
                                            <input type="password" name="password" class="form-control 
                                            @error('password')
                                                    is-invalid
                                            @enderror" 
                                            placeholder="Enter Password" 
                                            required>
                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>  
                                    <div class="col-md-6">                      
                                        <div class="form-group">
                                            <label>Confirm Password *</label>
                                            <input name="password_confirmation" type="password" class="form-control 
                                            @error('password_confirmation')
                                                    is-invalid
                                            @enderror" 
                                            placeholder="Enter Confirm Password" 
                                            required>
                                            @error('password_confirmation')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div> 
                                
                        </div>                                
                                                 
                            <button type="submit" class="btn btn-primary mr-2">Add User</button>
                        </form>
                    </div>
                </div>
            </div>

@endsection