@extends('admin.templates.default')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <a href="/admin/kamar/create" class="btn btn-success">+ Tambah Kamar</a>
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
                                    <th>Tipe Kamar</th>
                                    <th>Harga Kamar</th>
                                    <th>Gambar</th>
                                    <th>Jumlah Kamar</th>
                                    <th>#</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($kamar as $k)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $k->tipe_kamar }}</td>
                                        <td>{{ $k->harga_format() }}</td>
                                        <td>{{ $k->gambar}}</td>
                                        <td>{{ $k->jumlah_kamar }}</td>
                                        <td>
                                            <a class="btn btn-primary" href="/admin/kamar/{{ $k->id }}">Edit</a>

                                            <form method="POST" action="/admin/kamar/{{ $k->id }}">
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
