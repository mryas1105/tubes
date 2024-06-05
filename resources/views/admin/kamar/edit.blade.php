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

                    <form action="/admin/kamar/{{$kamar->id}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group row mb-2">
                            <label for="nama" class="col-sm-2 col-form-label">Tipe Kamar</label>
                            <div class="col-sm-10">
                                <input type="text" name="tipe_kamar" class="form-control" value="{{$kamar->tipe_kamar}}">
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
                                <input id="jumlah" type="number" name="jumlah" value="{{$kamar->jumlah_kamar}}" class="form-control">
                            </div>
                        </div>
                        <div class="form-group row mb-2">
                            <label for="harga" class="col-sm-2 col-form-label">Harga Kamar</label>
                            <div class="col-sm-10">
                                <input id="harga" type="number" name="harga" value="{{$kamar->harga_kamar}}" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
<button type="button" onclick="window.history.back()" class="btn btn-secondary">Cancel</button>
<button onclick="return confirm('Yakin mau mengedit data ini?')" class="btn btn-primary">Edit Kamar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
