<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Prediksi;

class PrediksiController extends Controller
{
    public function index()
    {
        if (!auth()->check()) return redirect('/login');
        return view('predict');
    }

    public function store(Request $request)
    {
        $request->validate([
            'umur'            => 'required|numeric|min:17|max:100',
            'pendapatan'      => 'required|numeric|min:0',
            'kepemilikan_rumah' => 'required',
            'lama_kerja'      => 'required|numeric|min:0',
            'tujuan_pinjaman' => 'required',
            'grade_pinjaman'  => 'required',
            'jumlah_pinjaman' => 'required|numeric|min:0',
            'suku_bunga'      => 'required|numeric|min:0|max:100',
            'status_pinjaman' => 'required',
            'persen_pinjaman' => 'required|numeric|min:0|max:1',
            'default_kredit'  => 'required',
            'lama_kredit'     => 'required|numeric|min:0',
        ]);

        // Hitung rasio pinjaman/pendapatan
        $rasio = $request->pendapatan > 0
            ? round(($request->jumlah_pinjaman / $request->pendapatan) * 100, 1)
            : 0;

        // Logika prediksi sederhana (Decision Tree manual)
        $risikoTinggi = false;
        $confidence   = 0;
        $factors      = 0;

        if ($rasio > 35)          { $risikoTinggi = true; $factors++; }
        if ($request->suku_bunga > 15) { $risikoTinggi = true; $factors++; }
        if ($request->lama_kredit < 5) { $factors++; }
        if ($request->lama_kerja < 3)  { $risikoTinggi = true; $factors++; }
        if ($request->default_kredit == 1) { $risikoTinggi = true; $factors += 2; }

        $confidence = $risikoTinggi
            ? min(95, 50 + ($factors * 8))
            : max(55, 90 - ($factors * 5));

        $hasil = $risikoTinggi ? 'Risiko Tinggi' : 'Risiko Rendah';

        // Simpan ke database
        $prediksi = Prediksi::create([
            'user_id'          => auth()->id(),
            'nama'             => auth()->user()->name,
            'umur'             => $request->umur,
            'pendapatan'       => $request->pendapatan,
            'status_rumah'     => $request->kepemilikan_rumah,
            'lama_kerja'       => $request->lama_kerja,
            'tujuan'           => $request->tujuan_pinjaman,
            'grade'            => 'Grade ' . $request->grade_pinjaman,
            'jumlah_pinjaman'  => $request->jumlah_pinjaman,
            'suku_bunga'       => $request->suku_bunga,
            'status_pinjaman'  => $request->status_pinjaman,
            'rasio_pinjaman'   => $rasio,
            'default_kredit'   => $request->default_kredit,
            'lama_riwayat'     => $request->lama_kredit,
            'hasil'            => $hasil,
            'confidence'       => $confidence,
            'riwayat_default'  => $request->default_kredit == 1
                                    ? 'Pernah Default'
                                    : 'Tidak Pernah Default',
        ]);

        return redirect()->route('hasil.show', $prediksi->id);
    }
}