<?php

namespace App\Http\Controllers;

use App\Models\Prediksi;
use Illuminate\Http\Request;

class HasilController extends Controller
{
    public function show($id)
    {
        if (!auth()->check()) return redirect('/login');

        // Hanya bisa lihat hasil milik sendiri
        $prediksi = Prediksi::where('id', $id)
                            ->where('user_id', auth()->id())
                            ->firstOrFail();

        return view('hasil', compact('prediksi'));
    }
}