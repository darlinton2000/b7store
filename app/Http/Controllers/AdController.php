<?php

namespace App\Http\Controllers;

use App\Models\Advertise;
use App\Models\Category;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;

class AdController extends Controller
{
    /**
     * Retorna a view da listagem dos anúncios
     *
     */
    public function list()
    {
        return view('list');
    }

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

    public function category(Request $request, string $slug)
    {
        $category = Category::where('slug', $slug)->first();

        if (!$category) {
            return redirect()->route('home');
        }

        $filteredAds = Advertise::where('category_id', $category->id)
            ->with('images')
            ->orderBy('created_at', 'desc')
            ->paginate(4);

        return view('category-list', compact('filteredAds', 'category'));

    }

    /**
     * Cria um anúncio
     *
     * @return View
     */
    public function create(): View
    {
        return view('dashboard.ad_create');
    }
}
