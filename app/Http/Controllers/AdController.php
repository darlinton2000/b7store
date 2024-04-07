<?php

namespace App\Http\Controllers;

use App\Models\Advertise;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;

class AdController extends Controller
{
    /**
     * Retorna a view do anúncio, se não existir retorna para a rota home
     *
     * @param string $slug
     */
    public function show(string $slug)
    {
        $ad = Advertise::where('slug', $slug)->first();
        if (!$ad) {
            return redirect()->route('home');
        }

        $ad->views++;
        $ad->save();

        $relatedAds = Advertise::where('category_id', $ad->category_id)
            ->where('state_id', $ad->state_id)
            ->where('id', '<>', $ad->id)
            ->with('images')
            ->orderBy('created_at', 'desc')
            ->orderBy('views', 'desc')
            ->limit(4)
            ->get();

        return view('single-ad', compact('ad', 'relatedAds'));
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
