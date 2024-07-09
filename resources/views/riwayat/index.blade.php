@extends('layouts.app2')
@section('content')
<div class="card">
    <div class="card-header">{{$title}}</div>
    <div class="card-body">
        <div align="right" class="mb-3">

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
                <th>Jenis Kelamin</th>
                <th>Nomor HP</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>
            @php $no=1; @endphp
            @foreach ($datas as $data)

            <tr>
                <td>{{$no++ }}</td>
                <td>{{$data->nama_jurusan}}</td>
                <td>
                @php
                    $gelombang = ($data->id_gelombang == 4) ? 'Gelombang 1' : (($data->id_gelombang == 5 ? 'Gelombang 1' : 'Gelombang 2'));
                @endphp
                    {{$gelombang}}
                </td>
                <td>{{$data->nama_lengkap}}</td>
                <td>{{$data->nik}}</td>
                <td>{{$data->jenis_kelamin}}</td>
                <td>{{$data->nomor_hp}}</td>
                <td>{{$data->email}}</td>
                    {{-- <a href="{{route('daftarpeserta.edit', $data->id)}}" class="btn btn-primary btn-sm">Edit</a> --}}
                    {{-- <form method="POST" action="{{route('daftarpeserta.destroy', $data->id)}}" class="d-inline">
                        @csrf
                        <input type="hidden" name="_method" value="DELETE">
                        <button class="btn btn-danger btn-sm" type="submit">Hapus</button>
                    </form> --}}
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

</div>
    </div>
</div>
@endsection
