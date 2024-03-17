<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengguna extends Model
{
    use HasFactory;

    /**
     * fillable
     *
     * @var array
     */
    protected $fillable = [
        'id_pengguna',
        'nama_lengkap',
        'alamat',
        'jenis_kelamin',
        'username',
        'password',
    ];
}