<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index(Request $request)
    {

        return view('customer.dashboard');
    }

    public function showTamu(Request $request)
    {

        return view('customer.tamu');
    }

    public function showTema(Request $request)
    {

        return view('customer.tema');
    }

    public function showUndangan(Request $request)
    {

        return view('customer.undangan');
    }

    public function showBukuTamu(Request $request)
    {
        return view('customer.bukuTamu');
    }

    public function showBuatUndangan(Request $request)
    {

        return view('customer.undangan.buatUndangan');
    }

    public function showPembayaran(Request $request)
    {

        return view('customer.pembayaran');
    }
    public function showBuktiPembayaran(Request $request)
    {

        return view('customer.buktiPembayaran');
    }
}
