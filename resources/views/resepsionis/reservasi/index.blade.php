@extends('resepsionis.templates.default')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">

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
                                    <th>Nama Pemesan</th>
                                    <th>NIK</th>
                                    <th>NO HP</th>
                                    <th>EMAIL</th>
                                    <th>TGL CEKIN</th>
                                    <th>TGL CEKOUT
                                    </th>
                                    <th>#</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($reservasi as $k)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $k->nama_pemesan }}</td>
                                        <td>{{ $k->nik }}</td>
                                        <td>{{ $k->no_pemesan }}</td>
                                        <td>{{ $k->email_pemesan }}</td>
                                        <td>{{ $k->tanggal_check_in }}</td>
                                        <td>{{ $k->tanggal_check_out }}</td>

                                        <td>
                                            <form action="/status/{{ $k->id }}" method="post">
                                                @csrf
                                                @if ($k->status === 'Booking')
                                                    <input type="hidden" name="status" value="Cek In">
                                                    <button type="submit" class="btn btn-primary">Cek In</button>
                                                @elseif ($k->status === 'Cek In')
                                                    <input type="hidden" name="status" value="Check Out">
                                                    <button type="submit" class="btn btn-success">Check Out</button>
                                                @endif

                                            </form>

                                            @if ($k->status === 'Check Out')
                                                <span class="btn btn-info">Tuntas</span>
                                            @endif

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
