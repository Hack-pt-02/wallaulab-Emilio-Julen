<?php

namespace App\Http\Controllers;

use App\Models\Ad;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function create()
    {
        $user = Auth::user();
        return view('ad.create', compact('user'));
    }

    public function show(Ad $ad){
        return view("ad.show", compact('ad'));
    }
}
