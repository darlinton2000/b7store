<?php

namespace App\Http\Controllers;

use App\Models\Advertise;
use App\Models\AdvertiseImage;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;

class AdController extends Controller
{
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

        AdvertiseImage::where('advertise_id', $ad->id)->delete();
        $ad->delete();
        return redirect()->back();
    }
}
