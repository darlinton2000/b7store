<?php

namespace App\Http\Controllers;

use App\Models\Advertise;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;

class AdController extends Controller
{
    /**
     * Retorna a view do anúncio
     *
     * @param string $slug
     * @return View
     */
    public function show(string $slug): View
    {
        $ad = Advertise::where('slug', $slug)->first();
        $ad->views++;
        $ad->save();

        return view('single-ad', compact('ad'));
    }

    /**
     * Deleta o anúncio
     *
     * @param int $id
     * @return RedirectResponse
     */
    public function delete(int $id): RedirectResponse
    {
        $ad = Advertise::where('id', $id)->where('user_id', Auth::user()->id)->first();

        if (!$ad) {
            return redirect()->route('home');
        }

        $ad->delete();
        return redirect()->back();
    }
}
