<?php

namespace App\Http\Controllers;
use App\Models\Pemesanan;

use Illuminate\Http\Request;

class PemesananController extends Controller
{
    public function index()
    {
        return view('pemesanan.index', [
            'title' => 'Pemesanan'
        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama' => 'required|max:255',
            'no_telepon' => 'required|max:15',
            'alamat' => 'required|max:255',
            'email' => 'required|unique:penggunas|email:dns',
            'jenis_pesanan' => 'required',
            'jenis_pengerjaan' => 'required',
            'pembayaran' => 'required',
            'pesan' => ''
        ]);

        Pemesanan::create($validatedData);

        return redirect('/welcome');

    }
}
