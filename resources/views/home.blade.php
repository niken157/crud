@extends('template')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Daftar Pegawai</div>

                <div class="card-body">
                    <a href="/pegawai/tambah" class="btn btn-sm btn-success mb-2">Tambah Data</a>
                    <table id="tbl_list" class="table table-striped table-bordered" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th>Nama</th>
                            <th>Jabatan</th>
                            <th>Umur</th>
                            <th>Alamat</th>
                            <th>Opsi</th>
                        </tr>
                    </thead>
                    <tbody>
                        {{-- @foreach($pegawai as $p)
                    <tr>
                        <td>{{ $p->pegawai_nama }}</td>
                        <td>{{ $p->pegawai_jabatan }}</td>
                        <td>{{ $p->pegawai_umur }}</td>
                        <td>{{ $p->pegawai_alamat }}</td>
                        <td>
                            <a type="button" class="btn btn-warning" href="/pegawai/edit/{{ $p->pegawai_id }}">Edit</a>
                            |
                            <a type="button" class="btn btn-danger" href="/pegawai/hapus/{{ $p->pegawai_id }}">Hapus</a>
                        </td>
                    </tr>
                    @endforeach --}}

                    </tbody>
                </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@push('scripts')
<script type="text/javascript">
$(document).ready(function () {
   $('#tbl_list').DataTable({
        processing: true,
        serverSide: true,
        ajax: '{{ url()->current() }}',
        columns: [
            { data: 'pegawai_nama', name: 'pegawai_nama' },
            { data: 'pegawai_jabatan', name: 'pegawai_jabatan' },
            { data: 'pegawai_umur', name: 'pegawai_umur' },
            { data: 'pegawai_alamat', name: 'pegawai_alamat' },
            { data: 'pegawai_alamat', name: 'pegawai_alamat' },

        ]
    });
 });
</script>
@endpush
