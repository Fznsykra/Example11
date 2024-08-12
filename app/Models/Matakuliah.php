<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MataKuliah extends Model
{
    use HasFactory;

    protected $table = 'matakuliahs'; // Ensure this matches your table name

    protected $fillable =[
        'kode_mk',
        'nama_mk',
        'sks',
        'semester',
    ];
}
?>
