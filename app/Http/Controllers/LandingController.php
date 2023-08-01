<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Penerima;
use App\Models\Pengumuman;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LandingController extends Controller
{
    public function index()
    {
        $users = User::all();
        $pengumuman = Pengumuman::latest()->first();
        $penerima = Penerima::with('masyarakat')->where('keterangan', 'penerima')->get();
        if ($pengumuman && $pengumuman->judul) {
            return view('landing.index', compact('penerima', 'pengumuman', 'users'));
        } else {
            return redirect()->route('dashboard.index')->with('error', 'Silahkan Buat pengumuman terlebih dahulu');
        }
        // return view('landing.index', compact('penerima', 'pengumuman', 'users'));
    }
}
