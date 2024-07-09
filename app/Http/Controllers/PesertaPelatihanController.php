<?php

namespace App\Http\Controllers;

use App\Models\PesertaPelatihan;
use App\Models\Jurusan;
use App\Models\Gelombang;
use Illuminate\Http\Request;

class PesertaPelatihanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $datas = PesertaPelatihan::whereHas('jurusan')->get();
        $title = "Data Peserta";
        return view('pesertapelatihan.index', compact('datas', 'title'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $title = "Tambah Jurusan";
        return view('pesertapelatihan.create', compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        PesertaPelatihan::create([
        'id_jurusan' => $request->id_jurusan,
        'id_gelombang' => $request->id_gelombang,
        'nama_lengkap' => $request->nama_lengkap,
        'nik' => $request->nik,
        'kartu_keluarga' => $request->kartu_keluarga,
        'jenis_kelamin' => $request->jenis_kelamin,
        'tempat_lahir' => $request->tempat_lahir,
        'tanggal_lahir' => $request->tanggal_lahir,
        'pendidikan_terakhir' => $request->pendidikan_terakhir,
        'nama_sekolah' => $request->nama_sekolah,
        'kejuruan' => $request->kejuruan,
        'nomor_hp' => $request->nomor_hp,
        'email' => $request->email,
        'aktivitas_saat_ini' => $request->aktivitas_saat_ini,
        'status' => $request->status,
        ]);

        return redirect()->to('pesertapelatihan')->with('message', 'Data Berhasil ditambah');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $edit = PesertaPelatihan::find($id);
        // $jurusans = Jurusan::orderById('id', 'desc')->get();
        // $gelombangs = Gelombang::orderById('id', 'desc')->get();
        $title = "Edit Data " . $edit->name;
        return view('pesertapelatihan.edit', compact('edit', 'title'));// 'jurusans', 'gelombangs'
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        PesertaPelatihan::where('id', $id)->update([
        'id_jurusan' => $request->id_jurusan,
        'id_gelombang' => $request->id_gelombang,
        'nama_lengkap' => $request->nama_lengkap,
        'nik' => $request->nik,
        'kartu_keluarga' => $request->kartu_keluarga,
        'jenis_kelamin' => $request->jenis_kelamin,
        'tempat_lahir' => $request->tempat_lahir,
        'tanggal_lahir' => $request->tanggal_lahir,
        'pendidikan_terakhir' => $request->pendidikan_terakhir,
        'nama_sekolah' => $request->nama_sekolah,
        'kejuruan' => $request->kejuruan,
        'nomor_hp' => $request->nomor_hp,
        'email' => $request->email,
        'aktivitas_saat_ini' => $request->aktivitas_saat_ini,
        'status' => $request->status,
        ]);
        return redirect()->to('pesertapelatihan')->with('message', 'Data Berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        PesertaPelatihan::where('id', $id)->delete();
        return redirect()->to('pesertapelatihan')->with('message', 'Data berhasil dihapus');
    }
}
