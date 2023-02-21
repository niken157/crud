
@extends('template')

@section('content')
    <div class="card">
        <div class="card-body">
            <h3>Data Pegawai</h3>
            <a type="button" class="btn btn-primary" href="/pegawai/tambah"> + Tambah Pegawai Baru</a>

            <br/>
            <br/>
            <table id="example" class="table table-hover">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Jabatan</th>
                    <th>Umur</th>
                    <th>Alamat</th>
                    <th>Opsi</th>
                  </tr>
                </thead>
                <tbody>
                    @php $no = 1; @endphp
                    @foreach($pegawai as $p)
                    <tr>
                        <td>{{ $no++ }}</td>
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
                    @endforeach
                </tbody>
              </table>
        </div>
      </div>

@endsection
