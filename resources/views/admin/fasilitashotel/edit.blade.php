@extends('admin.templates.default')
@section('title', 'Hotel Hebat | Edit Fasilitas Hotel')

@section('content-header')

    <div class="row mb-2">
        <div class="col-sm-6">
            <h1 class="m-0">Edit Fasilitas Hotel</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Beranda</a></li>
                <li class="breadcrumb-item active">Edit Fasilitas Hotel</li>
            </ol>
        </div><!-- /.col -->
    </div><!-- /.row -->

@endsection

@section('content')

<form action="/admin/fasilitashotel/{{ $fasilitashotel->id }}" method="post" enctype="multipart/form-data">
    @csrf
    @method('POST')

    <input type="hidden" name="image_lama" value="{{ $fasilitashotel->image }}">
    <div class="mb-3">
        <label for="nama_fasilitas" class="form-label">Nama Fasilitas</label>
        <input type="text" class="form-control @error('nama_fasilitas') is-invalid @enderror" id="nama_fasilitas" name="nama_fasilitas" value="{{ $fasilitashotel->nama_fasilitas }}">
        @error('nama_fasilitas')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
        @enderror
    </div>
    <div class="mb-3">
        <label for="keterangan" class="form-label">Keterangan</label>
        <input type="text" class="form-control @error('nama_fasilitas') is-invalid @enderror" id="keterangan" name="deskripsi_fasilitas" value="{{ $fasilitashotel->deskripsi_fasilitas }}">
        @error('keterangan')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
        @enderror
    </div>
    <div class="mb-3">
        <label for="image" class="form-label">Image</label>
        <input type="hidden" name="oldImage" value="{{ $fasilitashotel->image }}">
        <input class="form-control @error('image') is-invalid @enderror" type="file" id="image" name="image">
        @error('image')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
        @enderror
    </div>

    <button type="submit" class="btn btn-success">Edit</button>

</form>

@endsection
