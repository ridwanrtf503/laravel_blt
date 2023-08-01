<?php

namespace App\Http\Controllers;

use App\Models\Masyarakat;
use Illuminate\Http\Request;

class MasyarakatController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $masyarakat = Masyarakat::all();//mengambil data dari model
        return view('contents.masyarakat.index', compact('masyarakat'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('contents.masyarakat.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'no_kk' => 'required',
            'no_rek' => 'required',
            'nama' => 'required',
            'jenis_bantuan' => 'required',
            'jumlah' => 'required',
        ]);
        Masyarakat::create([
            'no_kk' => $request->no_kk,
            'no_rek' => $request->no_rek,
            'nama' => $request->nama,
            'jenis_bantuan' => $request->jenis_bantuan,
            'jumlah' => $request->jumlah,
        ]);
        return redirect()->route('masyarakat.index')->with('success', 'Data masyarakat berhasil disimpan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $masyarakat = Masyarakat::findOrFail($id);
        return view('contents.masyarakat.show', compact('masyarakat'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $masyarakat = Masyarakat::findOrFail($id);
        return view('contents.masyarakat.edit', compact('masyarakat'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'no_kk' => 'required',
            'no_rek' => 'required',
            'nama' => 'required',
            'jenis_bantuan' => 'required',
            'jumlah' => 'required',
        ]);
        $masyarakat = Masyarakat::findOrFail($id);
        $masyarakat->no_kk = $request->no_kk;
        $masyarakat->no_rek = $request->no_rek;
        $masyarakat->nama = $request->nama;
        $masyarakat->jenis_bantuan = $request->jenis_bantuan;
        $masyarakat->jumlah = $request->jumlah;
        $masyarakat->save();

        return redirect()->route('masyarakat.index')->with('success', 'Data masyarakat berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        try {
            $masyarakat = Masyarakat::findOrFail($id);
            
            // Menghapus semua data terkait di tabel penerima sebelum menghapus masyarakat
            $masyarakat->penerima()->delete();

            $masyarakat->delete();

            return redirect()->route('masyarakat.index')->with('success', 'Data masyarakat berhasil dihapus.');
        } catch (\Exception $e) {
            return redirect()->route('masyarakat.index')->with('error', 'Terjadi kesalahan saat menghapus data masyarakat.');
        }
    }

}
