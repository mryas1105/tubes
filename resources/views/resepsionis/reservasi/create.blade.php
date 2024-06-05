@extends('resepsionis.templates.default')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
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
                            <label for="nama" class="col-sm-2 col-form-label">Nama Pemesan</label>
                            <div class="col-sm-10">
                                <input type="text" name="nama pemesan" class="form-control">
                            </div>
                        </div>
                        <div class="form-group row mb-2">
                            <label for="gambar" class="col-sm-2 col-form-label">Nik</label>
                            <div class="col-sm-10">
                                <input id="nik" type="file" name="nik" class="form-control">
                            </div>
                        </div>
                        <div class="form-group row mb-2">
                            <label for="jumlah" class="col-sm-2 col-form-label">NO Tlf</label>
                            <div class="col-sm-10">
                                <input id="no tlf" type="number" name="no tlf" class="form-control">
                            </div>
                        </div>
                        <div class="form-group row mb-2">
                            <label for="harga" class="col-sm-2 col-form-label">Email</label>
                            <div class="col-sm-10">
                                <input id="email" type="number" name="email" class="form-control">
                            </div>
                        </div>
                        <div class="form-group row mb-2">
                            <label for="harga" class="col-sm-2 col-form-label">Tgl cekin</label>
                            <div class="col-sm-10">
                                <input id="tgl cekin" type="number" name="tgl cekin" class="form-control">
                            </div>
                        </div>
                        <div class="form-group row mb-2">
                            <label for="harga" class="col-sm-2 col-form-label">Tgl cekout</label>
                            <div class="col-sm-10">
                                <input id="tgl cekout" type="number" name="tgk cekout" class="form-control">
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
