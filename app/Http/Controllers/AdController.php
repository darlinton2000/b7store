<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdController extends Controller
{
    /**
     * Deleta o anúncio
     * @param Request $request
     * @param int $id
     * @return void
     */
    public function delete(Request $request, int $id)
    {
        dd($id);
    }
}
