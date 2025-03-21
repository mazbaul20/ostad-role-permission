@extends('backend.layout.app')
@section('content')
    <!-- start-content -->

    <!--breadcrumb-->
    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
        <div class="breadcrumb-title pe-3">Tables</div>
        <div class="ps-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 p-0">
                    <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Data Table</li>
                </ol>
            </nav>
        </div>
        @can('user-create')
        <div class="ms-auto">
            <div class="btn-group">
                <a href="{{ route('users.create') }}" class="btn btn-primary">Create User</a>
            </div>
        </div>
        @endcan
    </div>
    <!--end breadcrumb-->
    <h6 class="mb-0 text-uppercase">DataTable Example</h6>
    <hr>
    @can('user-list')
    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <div id="example_wrapper" class="dataTables_wrapper dt-bootstrap5">
                    <table id="myTable" class="display table table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Name</th>
                                <th>Roles</th>
                                <th>Email</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
@foreach ($users as $key=>$user)
    <tr>
        <td>{{ $key+1 }}</td>
        <td>{{ $user->name }}</td>
        <td>
            @foreach ($user->roles as $role)
                <span class="badge bg-danger">{{ $role->name }}</span>
            @endforeach

        </td>
        <td>{{ $user->email }}</td>
        <td class="d-flex gap-2">
            @can('user-edit')
            <a href="{{ route('users.edit',$user->id) }}" class="btn btn-primary btn-small">edit</a>
            @endcan
            @can('user-delete')
            <form action="{{ route('users.destroy',$user->id) }}" method="post">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger btn-small">delete</button>
            </form>
            @endcan
        </td>
    </tr>
@endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    @endcan
    <!-- end-content -->
@endsection
