<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Ad;

class PublicController extends Controller
{
    public function index () {
        $ads =  Ad::orderBy('created_at', 'desc')->take(6)->get();
        return view ('welcome');
    }
}
