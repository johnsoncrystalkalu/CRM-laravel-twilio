@extends('admin.layouts.main')

@section('content')
<div class="container-fluid px-4">
    <h1 class="mt-4">Account Management</h1>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <div class="row mt-4">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">Create Profile</div>
                <div class="card-body">
                    <form method="POST" action="{{ route('admin.users.store') }}">
                        @csrf

                        <div class="mb-2">
                            <input class="form-control" name="name" placeholder="Name" required>
                        </div>

                        <div class="mb-2">
                            <input class="form-control" name="email" type="email" placeholder="Email" required>
                        </div>

                        <div class="mb-2">
                            <input class="form-control" name="password" type="password" placeholder="Password" required>
                        </div>

                        <div class="mb-2">
                            <input class="form-control" name="phone" placeholder="Phone">
                        </div>

                        <div class="mb-2">
                            <input class="form-control" name="department" placeholder="Department">
                        </div>

                        <div class="mb-2">
                            <select name="status" class="form-select">
                                <option value="active">Active</option>
                                <option value="inactive">Inactive</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <select name="role" class="form-select">
                                <option value="admin">Admin</option>
                                <option value="user">User</option>
                            </select>
                        </div>

                        <button class="btn btn-primary w-100">Create Account</button>
                    </form>
                </div>
            </div>
        </div>

       <div class="col-md-8">
    <div class="card">
        <div class="card-header">Profile Lists</div>
        <div class="card-body table-responsive">
            <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Role</th>
                        <th>Status</th>
                        <th width="140">Action</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($users as $user)
                    <tr @if(Auth::id() === $user->id) class="table-success" @endif>
                        <td>
                            {{ $user->name }}
                            @if(Auth::id() === $user->id)
                                <span class="badge bg-primary">Logged in</span>
                            @endif
                        </td>
                        <td>{{ $user->email }}</td>
                        <td>{{ ucfirst($user->role) }}</td>
                        <td>{{ ucfirst($user->status) }}</td>
                        <td>
                            <a href="{{ route('admin.users.edit', $user->id) }}"
                               class="btn btn-sm btn-warning">Edit</a>

                            <form method="POST"
                                  action="{{ route('admin.users.destroy', $user->id) }}"
                                  class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-sm btn-danger"
                                    onclick="return confirm('Delete this user?')">
                                    Delete
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

    </div>
</div>
@endsection
