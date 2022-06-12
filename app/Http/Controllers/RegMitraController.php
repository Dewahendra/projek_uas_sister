<?php

namespace App\Http\Controllers;

use App\Models\Mitra;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegMitraController extends Controller
{
    public function index()
    {
        return view('regmitra.index', [
            'title' => 'Register'
        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama' => 'required|max:255',
            'alamat' => 'required|max:255',
            'no_telepon' => 'required|max:15',
            'nama_toko' => 'required|max:255',
            'harga_laundry' => 'required',
            'harga_strika' => 'required',
            'deskripsi' => 'required|max:255',
            'email' => 'required|unique:penggunas|email:dns',
            'password' => 'required|min:8|max:255',
            'cover' => 'required'
        ]);

        $validatedData['password'] = Hash::make($validatedData['password']);

        Mitra::create($validatedData);

        return redirect('/logmitra')->with('success', 'Registrasi Berhasil, Silahkan Login!');

    }
}
