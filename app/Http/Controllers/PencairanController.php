<?php

namespace App\Http\Controllers;

use App\Models\Penerima;
use App\Models\Pencairan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PDF;

class PencairanController extends Controller
{
    public function index()
    {
        $pencairan = Pencairan::all();
        return view('contents.pencairan.index', compact('pencairan'));
    }

    public function create()
    {
        $penerima = Penerima::with('masyarakat')->get();
        return view('contents.pencairan.create', ['penerima' => $penerima]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'penerima_id' => 'required',
            'tanggal_pencairan'=>'nullable',
            'status' => 'required',
        ]);
        
            // Periksa apakah penerima ID sudah ada dalam data pencairan sebelumnya
            $existingPencairan = Pencairan::where('penerima_id', $request->penerima_id)->first();

            if ($existingPencairan) {
                // Jika penerima ID sudah ada, berikan respon atau tindakan yang sesuai
                return redirect()->back()->withErrors('Orang ini sudah ada dalam data pencairan sebelumnya.');
            }

            // Jika penerima ID belum ada, buat dan simpan data pencairan
            $pencairan = new Pencairan([
                'penerima_id' => $request->penerima_id,
                'tanggal_pencairan' => $request->tanggal_pencairan,
                'status' => $request->status,
                // tambahkan field lainnya sesuai kebutuhan
            ]);

            $pencairan->save();
        

        return redirect()->route('pencairan.index')->with('success', 'Pencairan berhasil ditambahkan.');
    }

    // public function edit(Pencairan $pencairan)
    // {
    //     return view('pencairan.edit', compact('pencairan'));
    // }

    // public function update(Request $request, Pencairan $pencairan)
    // {
    //     $request->validate([
    //         'penerima_id' => 'required',
    //         'tanggal' => 'required',
    //         'jumlah' => 'required',
    //     ]);

    //     $pencairan->update($request->all());

    //     return redirect()->route('pencairan.index')->with('success', 'Pencairan berhasil diperbarui.');
    // }

    public function destroy($id)
    {
        
        $pencairan = Pencairan::findOrFail($id);
        $penerima = $pencairan->penerima;
        // Hapus data pencairan
        $pencairan->delete();
        $penerima->delete();

        // Hapus data terkait dari tabel penerim

        return redirect()->route('pencairan.index')->with('success', 'Pencairan berhasil dihapus.');
    }
    public function laporan(Request $request)
    {
        $pencairan = Pencairan::all();
        return view('contents.pencairan.cetak', compact('pencairan'));
    }

    
}
