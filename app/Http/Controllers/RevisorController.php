<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\ad;

class RevisorController extends Controller
{
    public function index()
    {
        $ad = Ad::where('is_accepted', null)
            ->orderBy('created_at', 'desc')
            ->first();
        return view('revisor.home', compact('ad'));
    }

    public function acceptAd(Ad $ad)
    {
        $ad->setAccepted(true);
        return redirect()
            ->back()
            ->withMessage(['type' => 'success', 'text' => 'Anuncio aceptado']);
    }
    public function rejectAd(Ad $ad)
    {
        $ad->setAccepted(false);
        return redirect()
            ->back()
            ->withMessage(['type' => 'danger', 'text' => 'Anuncio rechazado']);
    }

    /* otra manera */

    /* public function acceptAd(Ad $ad)
    {
        $ad->is_accepted = true;
        $ad->save();
        return redirect()
            ->back()
            ->withMessage(['type' => 'success', 'text' => 'Anuncio aceptado']);
    }
    public function rejectAd(Ad $ad)
    {
        $ad->is_accepted = false;
        $ad->save();
        return redirect()
            ->back()
            ->withMessage(['type' => 'danger', 'text' => 'Anuncio rechazado']);
    } */
}
