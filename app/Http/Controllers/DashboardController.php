<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(Request $request)
    {
        $user = auth()->user()->role;
        
        if ($user == 'admin'){
            return view('admin.dashboard');
        }else if ($user == 'user'){
            return view('user.dashboard');
        }else if ($user == 'affiliate'){
            return view('affiliate.dashboard');
        }
        
    }
}
