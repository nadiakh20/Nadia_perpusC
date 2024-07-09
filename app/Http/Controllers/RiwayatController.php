<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RiwayatController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $datas = DB::table('peserta_pelatihans')
        ->join('jurusans', 'peserta_pelatihans.id_jurusan', '=', 'jurusans.id')
        ->join('gelombangs', 'peserta_pelatihans.id_gelombang', '=', 'gelombangs.id')
        ->where('gelombangs.aktif', 0)
        ->select('peserta_pelatihans.*', 'jurusans.nama_jurusan', 'gelombangs.nama_gelombang')
        ->get();

        $title = 'Riwayat Pendaftaran Peserta Pelatihan';
        $desc = 'Data terkait pendaftaran yang sudah selesai';

        return view('riwayat.index', compact('datas', 'title', 'desc'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
