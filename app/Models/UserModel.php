<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserModel extends Model
{
    use HasFactory;

    protected $table = 'm_user';
    protected $primaryKey = 'user_id'; 
    public $incrementing = true;
    public $timestamps = false; // atau true, tergantung kamu pakai created_at / updated_at atau tidak

    protected $fillable = ['username', 'nama', 'password', 'level_id'];
}
