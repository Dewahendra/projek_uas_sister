<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Mitra extends Authenticatable
{
    use HasFactory;
    protected $fillable=[
        'nama', 'alamat', 'no_telepon', 'nama_toko', 'harga_laundry', 'harga_strika', 'deskripsi', 'email', 'password', 'cover'
    ];

    protected $hidden = [
        'id',
    ];
}
