<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AffiliateController extends Controller
{
    public function index(Request $request)
    {
        return view('affiliate.dashboard');
    }
    public function showRiwayatKomisi()
    {
        return view('affiliate.riwayatKomisi');
    }

    public function showCustomerAffiliate()
    {
        return view('affiliate.customer');
    }

    public function createReferral()
    {
        return view('affiliate.referral');
    }

    
}
