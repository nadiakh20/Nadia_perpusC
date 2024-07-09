@extends('layouts.app')
@section('content')
<div class="card">
    <div class="card-header">{{$title}}</div>
    <div class="card-body">
        <div align="right" class="mb-3">
            <a href="{{route('pesertapelatihan.create')}}" class="btn btn-outline-primary">Tambah Data</a>
        </div>
<div class="table-responsive">
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Jurusan</th>
                <th>Gelombang</th>
                <th>Nama Lengkap</th>
                <th>NIK</th>
                <th>KK</th>
                <th>Jenis Kelamin</th>
                <th>Tempat Lahir</th>
                <th>Tanggal Lahir</th>
                <th>Pendidikan Terakhir</th>
                <th>Nama Sekolah</th>
                <th>Kejuruan</th>
                <th>Nomor HP</th>
                <th>Email</th>
                <th>Aktivitas Terkini</th>
                <th>Status</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @php $no=1; @endphp
            @foreach ($datas as $data)

            <tr>
                <td>{{$no++ }}</td>
                <td>{{$data->jurusan->nama_jurusan}}</td>
                <td>{{$data->gelombang->nama_gelombang}}</td>
                <td>{{$data->nama_lengkap}}</td>
                <td>{{$data->nik}}</td>
                <td>{{$data->kartu_keluarga}}</td>
                <td>{{$data->jenis_kelamin}}</td>
                <td>{{$data->tempat_lahir}}</td>
                <td>{{$data->tanggal_lahir}}</td>
                <td>{{$data->pendidikan_terakhir}}</td>
                <td>{{$data->nama_sekolah}}</td>
                <td>{{$data->kejuruan}}</td>
                <td>{{$data->nomor_hp}}</td>
                <td>{{$data->email}}</td>
                <td>{{$data->aktivitas_saat_ini}}</td>
                <td>@php
                    if ($data->status == 0) {
                        $status = 'Tidak Lolos';
                    } elseif ($data->status == 1) {
                        $status = 'Lolos';
                    }
                    @endphp
                    {{$status}}</td>
                <td>
                    <a href="{{route('pesertapelatihan.edit', $data->id)}}" class="btn btn-primary btn-sm">Edit</a>
                    <form method="POST" action="{{route('pesertapelatihan.destroy', $data->id)}}" class="d-inline">
                        @csrf
                        <input type="hidden" name="_method" value="DELETE">
                        <button class="btn btn-danger btn-sm" type="submit">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

</div>
    </div>
</div>
@endsection
