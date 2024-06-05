@extends('admin.templates.default.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <form action="/admin/kamar/{{ $user->id }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="form-group row mb-2">
                                <label for="nama" class="col-sm-2 col-form-label">Name</label>
                                <div class="col-sm-10">
                                    <input type="name" name="name" class="form-control">
                                </div>
                            </div>

                            <div class="form-group row mb-2">
                                <label for="jumlah" class="col-sm-2 col-form-label">Email</label>
                                <div class="col-sm-10">
                                    <input id="jumlah" type="email" name="email" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row mb-2">
                                <label for="jumlah" class="col-sm-2 col-form-label">Password</label>
                                <div class="col-sm-10">
                                    <input id="jumlah" type="password" name="password" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row mb-2">
                                <label for="harga" class="col-sm-2 col-form-label">peran</label>
                                <div class="col-sm-10">
                                    <select name="role" id="role" class="from-control">
                                        <option value="admin">Admin</option>
                                        <option value="resepsionis">Resepsionis</option>
                                        <option value="user">Tamu</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <button type="button" onclick="window.history.back()"
                                    class="btn btn-secondary">Cancel</button>
                                <button onclick="return confirm('Yakin mau mengedit data ini?')"
                                    class="btn btn-primary">Edit User</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
