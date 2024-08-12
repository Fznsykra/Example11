<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class jabatan extends Model
{
    use HasFactory;

    protected $table = 'jabatans'; // Ensure this matches your table name

    protected $fillable =[
        'kode_jabatan',
        'nama_jabatan',
        'keterangan',

    ];
}
