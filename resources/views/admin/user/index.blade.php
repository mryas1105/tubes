@extends('admin.templates.default')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <a href="/admin/user/create" class="btn btn-success">+ Tambah User</a>
                    </div>

                    <div class="card-body">
                        @if (session('success'))
                            <div class="alert alert-success" role="alert">
                                {{ session('success') }}
                            </div>
                        @endif

                        <table class="table">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>User</th>
                                    <th>Email</th>
                                    <th>Role</th>
                                    <th>#</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($users as $k)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $k->name }}</td>
                                        <td>{{ $k->email }}</td>
                                        <td>{{ $k->roles->get(0)->name }}</td>
                                        <td>
                                            <a class="btn btn-primary" href="/admin/user/{{ $k->id }}">Edit</a>

                                            <form method="POST" action="/admin/user/{{ $k->id }}">
                                                @csrf
                                                @method('DELETE')
                                                <button class="btn btn-danger"
                                                    onclick="return confirm('Yakin akan menghapus data ini?')"
                                                    type="submit">Delete</button>
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
