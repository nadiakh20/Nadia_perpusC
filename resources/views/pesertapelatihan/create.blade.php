@extends('layouts.app')
@section('content')
    <div class="card">
        <div class="card-header">{{$title}}</div>
        <div class="card-body">
            <form action="{{route('pesertapelatihan.store')}}" method="POST">
                <form action="" method="post">
                    @csrf
                    <div class="form-group mb-3">
                        <label for="">Jurusan</label>
                        <input type="text" name="id_jurusan" placeholder="Masukkan Jurusan" class="form-control">
                    </div>
                    <div class="form-group mb-3">
                        <label for="">Gelombang</label>

                        <input type="text" name="id_gelombang" placeholder="Masukkan id_gelombang" class="form-control">
                    </div>
                    <div class="form-group mb-3">
                        <label for="">Nama Lengkap</label>
                        <input type="text" name="nama_lengkap" placeholder="Masukkan Nama Lengkap Anda" class="form-control">
                    </div>
                <div class="form-group mb-3">
                    <label for="">NIK</label>
                    <input type="text" name="nik" placeholder="Masukkan NIK Anda" class="form-control">
                </div>
                <div class="form-group mb-3">
                    <label for="">KK</label>
                    <input type="text" name="kartu_keluarga" placeholder="Masukkan Nomor KK Anda" class="form-control">
                </div>
                <div class="form-group mb-3">
                    <label for="">Jenis Kelamin</label>
                    <select name="jenis_kelamin" id="" class="form-control">
                        <option value=""></option>
                        <option value="laki-laki">Laki-laki</option>
                        <option value="perempuan">Perempuan</option>
                    </select>
                </div>
                <div class="form-group mb-3">
                    <label for="">Tempat Lahir</label>
                    <input type="text" name="tempat_lahir" placeholder="Masukkan Tempat Lahir Anda" class="form-control">
                </div>
                <div class="form-group mb-3">
                    <label for="">Tanggal Lahir</label>
                    <input type="date" name="tanggal_lahir" class="form-control">
                </div>
                <div class="form-group mb-3">
                    <label for="">Pendidikan Terakhir</label>
                    <input type="text" name="pendidikan_terakhir" placeholder="Masukkan Pendidikan Terakhir Anda" class="form-control">
                </div>
                <div class="form-group mb-3">
                    <label for="">Nama Sekolah</label>
                    <input type="text" name="nama_sekolah" placeholder="Masukkan Nama Sekolah Anda" class="form-control">
                </div>
                <div class="form-group mb-3">
                    <label for="">Kejuruan</label>
                    <input type="text" name="kejuruan" placeholder="Masukkan kejuruan Anda" class="form-control">
                </div>
                <div class="form-group mb-3">
                    <label for="">Nomor HP</label>
                    <input type="text" name="nomor_hp" placeholder="Masukkan Nomor HP" class="form-control">
                </div>
                <div class="form-group mb-3">
                    <label for="">Email</label>
                    <input type="text" name="email" placeholder="Masukkan Email Anda" class="form-control">
                </div>
                <div class="form-group mb-3">
                    <label for="">Aktivitas Terkini</label>
                    <input type="text" name="aktivitas_saat_ini" placeholder="Masukkan Aktivitas Terkini Anda" class="form-control">
                </div>
                <div class="form-group mb-3">
                    <label for="">Status</label>
                    <input type="text" name="status" placeholder="Masukkan Status Anda" class="form-control">
                </div>
                <div class="form-group mb-3">
                    <input type="submit" class="btn btn-primary" value="simpan">
                    <a href="{{url()->previous()}}" class="btn btn-danger">Kembali</a>
                </div>
            </form>
        </div>
    </div>
@endsection
