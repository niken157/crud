@extends('template')

@section('content')
    <div class="card">
        <div class="card-body">
            <h3>Edit Pegawai</h3>

            <a type="button" class="btn btn-primary" href="/pegawai"> <- Kembali</a>

            <br/>
            <br/>
            <form action="/pegawai/update" method="post">
                {{ csrf_field() }}
                <input type="hidden" name="id" value="{{ $pegawai->pegawai_id }}"> <br/>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Nama</label>
                    <input name="nama" value="{{$pegawai->pegawai_nama}}" type="text" class="form-control" id="exampleFormControlInput1" placeholder="masukkan nama" required>
                  </div>
                  <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Jabatan</label>
                    <input name="jabatan" value="{{ $pegawai->pegawai_jabatan }}" type="text" class="form-control" id="exampleFormControlInput1" placeholder="masukkan jabatan" required>
                  </div>
                  <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Umur</label>
                    <input name="umur" value="{{ $pegawai->pegawai_umur }}" type="number" class="form-control" id="exampleFormControlInput1" placeholder="masukkan umur" required>
                  </div>
                  <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Alamat</label>
                    <input name="alamat" value="{{ $pegawai->pegawai_alamat }}" type="text" class="form-control" id="exampleFormControlInput1" placeholder="masukkan alamat" required>
                  </div>
                <input type="submit" class="btn btn-primary" value="Simpan Data">
            </form>
        </div>
      </div>
      @endsection
