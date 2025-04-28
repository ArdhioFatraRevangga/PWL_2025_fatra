<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;

    // Mengizinkan mass assignment hanya untuk kolom tertentu
    protected $fillable = ['nama', 'email', 'password'];

    // Alternatif menggunakan $guarded untuk mencegah mass assignment
    // protected $guarded = ['id']; // Jika menggunakan $guarded
}
