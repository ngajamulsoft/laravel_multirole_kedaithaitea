@extends('layouts.app')
@section('content')
            <div class="col-lg-12">
                <div class="d-flex flex-wrap align-items-center justify-content-between mb-4">
                    <div>
                        <h4 class="mb-3">User Role</h4>
                        @if (session('message'))
                            <x-alert :type="session('type')" :message="session('message')"/>
                        @endif
                    </div>
                    <a href="{{ route('admin.role.create') }}" class="btn btn-primary add-list"><i class="las la-plus mr-3"></i>Add Role</a>
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
                        @foreach($roles as $role)
                        <tr>
                            <td>
                                <div class="checkbox d-inline-block">
                                    <input type="checkbox" class="checkbox-input" id="checkbox2">
                                    <label for="checkbox2" class="mb-0"></label>
                                </div>
                            </td>
                            <td>{{ $role->name }}</td>
                            <td>{{ $role->display_name }}</td>
                            <td>
                                <form action="{{ route("admin.role.destroy",$role->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                <a href="{{ route("admin.role.edit",$role->id) }}" class="badge bg-primary mr-2" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit" ><i class="ri-pencil-line mr-0"></i>
                                </a>
                                <button type="submit" class="badge bg-danger border-0" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete" href="#"><i class="ri-delete-bin-line mr-0"></i>
                                </button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                {{ $roles->links() }}
                </div>
            </div>
@endsection