<?php

namespace App\Http\Controllers;

use App\Models\Pengumuman;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PengumumanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pengumuman = Pengumuman::latest()->get();

        return view('contents.pengumuman.index', compact('pengumuman'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('contents.pengumuman.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'isi' => 'required',
            'periode' => 'required',
        ]);
        $namaUser = Auth::user()->name;

        $pengumuman = new Pengumuman();
        $pengumuman->judul = $request->judul;
        $pengumuman->isi = $request->isi;
        $pengumuman->periode = $request->periode;
        $pengumuman->nama = $namaUser; // Menggunakan nama pengguna yang sedang login
        $pengumuman->user_id = Auth::user()->id;
        $pengumuman->save();
        return redirect()->route('pengumuman.index')->with('success', 'Pengumuman berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $pengumuman = Pengumuman::findOrFail($id);
        return view('contents.pengumuman.show', compact('pengumuman'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $pengumuman = Pengumuman::findOrFail($id);
        return view('contents.pengumuman.edit', compact('pengumuman'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $pengumuman = Pengumuman::findOrFail($id);

        $request->validate([
            'judul' => 'required',
            'isi' => 'required',
            'periode',
        ]);

        $pengumuman->update([
            'judul' => $request->judul,
            'isi' => $request->isi,
            'periode'=> $request->periode,
        ]);

        return redirect()->route('pengumuman.index')->with('success', 'Pengumuman berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = Pengumuman::findOrFail($id);
        $data->delete();

        return redirect()->route('pengumuman.index')->with('success', 'Data berhasil dihapus');
    }
    public function cetak($id)
{
    // Mengambil data pencairan berdasarkan ID
    $pencairan = Pencairan::findOrFail($id);

    // Mengirim data pencairan ke halaman cetak
    return view('pencairan.cetak', compact('pencairan'));
}

}
