<?php

namespace App\Http\Controllers;

use App\Models\Penerima;
use App\Models\Masyarakat;
use Illuminate\Http\Request;

class PenerimaController extends Controller
{
    public function index()
    {
        $penerima = Penerima::with('masyarakat')->get();
        return view('contents.penerima.index', compact('penerima'));
    }

    public function create()
    {
        $masyarakat = Masyarakat::all();
        return view('contents.penerima.create', compact('masyarakat'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'masyarakat_id' => 'required',
            'keterangan' => 'required|array',
        ]);

        $masyarakatId = $validatedData['masyarakat_id'];
        $keterangan = implode(', ', $validatedData['keterangan']);

        Penerima::create([
        'masyarakat_id' => $masyarakatId,
        'keterangan' => $keterangan,
    ]);

        return redirect()->route('penerima.index')
            ->with('success', 'Data penerima berhasil ditambahkan.');
    }

    public function destroy($id)
    {
        $penerima = Penerima::findOrFail($id);
        $penerima->delete();

        return redirect()->route('penerima.index')
            ->with('success', 'Data penerima berhasil dihapus.');

    }
    public function show($id)
    {
    $penerima = Penerima::findOrFail($id);
    return view('contents.penerima.show', compact('penerima'));
    }

}
