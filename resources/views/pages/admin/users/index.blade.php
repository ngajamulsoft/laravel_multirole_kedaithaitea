@extends('layouts.app')
@section('content')
            <div class="col-lg-12">
                <div class="d-flex flex-wrap align-items-center justify-content-between mb-4">
                    <div>
                        <h4 class="mb-3">User List</h4>
                        @if (session('message'))
                            <x-alert :type="session('type')" :message="session('message')"/>
                        @endif
                    </div>
                    <a href="{{ route('admin.user.create') }}" class="btn btn-primary add-list"><i class="las la-plus mr-3"></i>Add User</a>
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
                            <th>Email</th>
                            <th>Role</th>
                            <th>Status</th>
                            <th>Action</th>
                            
                            
                        </tr>
                    </thead>
                    <tbody class="ligth-body">
                        @foreach($users as $user)
                        <tr>
                            <td>
                                <div class="checkbox d-inline-block">
                                    <input type="checkbox" class="checkbox-input" id="checkbox2">
                                    <label for="checkbox2" class="mb-0"></label>
                                </div>
                            </td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>
                                @foreach($user->roles as $role)
                                    {{ $role->display_name }}
                                @endforeach
                            </td>
                            <td>
                                
                             @livewire('admin.index', ['user' => $user], key($user->id))
                                
                            </td>
                            <td>
                                <form action="{{ route("admin.user.destroy",$user->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                <a href="{{ route("admin.user.edit",$user->id) }}" class="badge bg-primary mr-2" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit" href="#"><i class="ri-pencil-line mr-0"></i>
                                </a>
                                <button type="submit" class="badge bg-danger border-0" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete" href="#"><i class="ri-delete-bin-line mr-0"></i>
                                </button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                </div>
            </div>
@endsection