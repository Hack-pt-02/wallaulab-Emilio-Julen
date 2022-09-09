<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ad;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

use App\Mail\BecomeRevisor;



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
    public function becomeRevisor()
    {
        Mail::to('admin@wallaulab.com')->send(new BecomeRevisor(Auth::user()));
        return redirect()
            ->route('home')
            ->withMessage(['type' => 'success', 'text' => 'Solicitud enviada con éxito, pronto sabrás algo, gracias!']);
    }
}
