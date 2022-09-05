<?php

namespace App\Http\Controllers;

use App\Models\Ad;
use Illuminate\Http\Request;


/* 
class PublicController extends Controller
{
    public function index () {
        $ads =  Ad::orderBy('created_at', 'desc')->take(6)->get();
        return view ('welcome', compact('ads'));
    }
}
 */

class PublicController extends Controller
{
public function index()
{
$ads = Ad::orderBy('created_at','desc')->take(6)->get
(); // sort in db
return view('welcome',compact('ads'));
}
}