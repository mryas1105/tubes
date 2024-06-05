@extends('admin.templates.default')

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

                    <form action="/admin/kamar/create" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group row mb-2">
                            <label for="nama" class="col-sm-2 col-form-label">Tipe Kamar</label>
                            <div class="col-sm-10">
                                <input type="text" name="tipe_kamar" class="form-control">
                            </div>
                        </div>
                        <div class="form-group row mb-2">
                            <label for="gambar" class="col-sm-2 col-form-label">Gambar Kamar</label>
                            <div class="col-sm-10">
                                <input id="gambar" type="file" name="gambar" class="form-control">
                            </div>
                        </div>
                        <div class="form-group row mb-2">
                            <label for="jumlah" class="col-sm-2 col-form-label">Jumlah Kamar</label>
                            <div class="col-sm-10">
                                <input id="jumlah" type="number" name="jumlah" class="form-control">
                            </div>
                        </div>
                        <div class="form-group row mb-2">
                            <label for="harga" class="col-sm-2 col-form-label">Harga Kamar</label>
                            <div class="col-sm-10">
                                <input id="harga" type="number" name="harga" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <button class="btn btn-primary">Tambah Kamar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
