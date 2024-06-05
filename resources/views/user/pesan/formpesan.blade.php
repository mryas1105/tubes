@extends('admin.templates.default')

@section('content')
Haloooooo
@endsection

<!-- @push('scripts')
    <script>
        $(function() {
            $('#dataPenulis').DataTable({
                processing: true,
                serverSide: true,
                ajax: '{{ route('admin.penulis.data')}}',
                columns: [
                    { data: 'DT_RowIndex', orderable: false, searchable: false},
                    { data: 'nama'},
                    { data: 'action'}
                ]
            });
        });
    </script>
@endpush -->