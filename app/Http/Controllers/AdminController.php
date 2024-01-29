<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(Request $request)
    {

        return view('admin.dashboard');
    }

    public function showUsers()
    {
        return view('admin.users');
    }

    public function showUndangan()
    {
        return view('admin.undangan');
    }

    public function showPemasukan()
    {

        return view('admin.pemasukan');
    }

    public function showTema(Request $request)
    {

        return view('admin.tema');
    }

    public function showPaket(Request $request)
    {

        return view('admin.paket');
    }

    public function showTransaksi(Request $request)
    {

        return view('admin.transaksi');
    }

    public function showKomisi(Request $request)
    {

        return view('admin.komisi');
    }
}

