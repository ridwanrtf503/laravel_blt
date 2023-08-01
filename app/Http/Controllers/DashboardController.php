<?php

namespace App\Http\Controllers;

use App\Models\Masyarakat;

class DashboardController extends Controller
{
    public function index()
    {
        $jumlahMasyarakat = Masyarakat::count();
        return view('contents.admin')->with('jumlahMasyarakat', $jumlahMasyarakat);
    }
}
