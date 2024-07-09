@extends('layouts.app')
@section('content')
    <div class="card">
        <div class="card-header">{{ $title }}</div>
        <div class="card-body">
            <form action="{{ route('pesertapelatihan.update', $edit->id)}}" method="POST">
                <form action="" method="post">
                    @csrf
                    @method('PUT')
                    <div class="form-group mb-3">
                        <label for="">id_jurusan</label>
                        <input value="{{$edit->id_jurusan}}" type="text" name="id_jurusan" placeholder="Masukkan Id Jurusan" class="form-control">
                    </div>
                    <div class="form-group mb-3">
                        <label for="">id_gelombang</label>
                        <input value="{{$edit->id_gelombang}}" type="text" name="id_gelombang" placeholder="Masukkan Id Gelombang" class="form-control">
                    </div>
                    <div class="form-group mb-3">
                        <label for="">Nama Lengkap</label>
                        <input value="{{$edit->nama_lengkap}}" type="text" name="nama_lengkap" placeholder="Masukkan Nama Lengkap Anda" class="form-control">
                    </div>
                    <div class="form-group mb-3">
                        <label for="">NIK</label>
                        <input value="{{$edit->nik}}" type="text" name="nik" placeholder="Masukkan NIK Anda" class="form-control">
                    </div>
                    <div class="form-group mb-3">
                        <label for="">KK</label>
                        <input value="{{$edit->kartu_keluarga}}" type="text" name="kartu_keluarga" placeholder="Masukkan Nomor KK Anda" class="form-control">
                    </div>
                    <div class="form-group mb-3">
                        <label for="">Jenis Kelamin</label>
                        <input value="{{$edit->jenis_kelamin}}" type="text" name="jenis_kelamin" placeholder="Masukkan Tanggal Lahir Anda" class="form-control">
                    </div>
                    <div class="form-group mb-3">
                        <label for="">Tempat Lahir</label>
                        <input value="{{$edit->tempat_lahir}}" type="text" name="tempat_lahir" placeholder="Masukkan Tempat Lahir Anda"
                            class="form-control">
                    </div>
                    <div class="form-group mb-3">
                        <label for="">Tanggal Lahir</label>
                        <input value="{{$edit->tanggal_lahir}}" type="date" name="tanggal_lahir" class="form-control">
                    </div>
                    <div class="form-group mb-3">
                        <label for="">Pendidikan Terakhir</label>
                        <input value="{{$edit->pendidikan_terakhir}}" type="text" name="pendidikan_terakhir" placeholder="Masukkan Pendidikan Terakhir Anda"
                            class="form-control">
                    </div>
                    <div class="form-group mb-3">
                        <label for="">Nama Sekolah</label>
                        <input value="{{$edit->nama_sekolah}}" type="text" name="nama_sekolah" placeholder="Masukkan Nama Sekolah Anda"
                            class="form-control">
                    </div>
                    <div class="form-group mb-3">
                        <label for="">Kejuruan</label>
                        <input value="{{$edit->kejuruan}}" type="text" name="kejuruan" placeholder="Masukkan kejuruan Anda"
                            class="form-control">
                    </div>
                    <div class="form-group mb-3">
                        <label for="">Nomor HP</label>
                        <input value="{{$edit->nomor_hp}}" type="text" name="nomor_hp" placeholder="Masukkan Nomor HP"
                            class="form-control">
                    </div>
                    <div class="form-group mb-3">
                        <label for="">Email</label>
                        <input value="{{$edit->email}}" type="text" name="email" placeholder="Masukkan Email Anda"
                            class="form-control">
                    </div>
                    <div class="form-group mb-3">
                        <label for="">Aktivitas Terkini</label>
                        <input value="{{$edit->aktivitas_saat_ini}}" type="text" name="aktivitas_saat_ini" placeholder="Masukkan Aktivitas Terkini"
                            class="form-control">
                    </div>
                    <div class="form-group mb-3">
                        <label for="">Status</label>
                        <input value="{{$edit->status}}" type="text" name="status" placeholder="Masukkan Status Terkini"
                            class="form-control">
                    </div>
                    <div class="form-group mb-3">
                        <input type="submit" class="btn btn-primary" value="simpan">
                        <a href="{{url()->previous()}}" class="btn btn-danger">Kembali</a>
                    </div>
                </form>
        </div>
    </div>
@endsection
