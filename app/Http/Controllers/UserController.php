<?php

namespace App\Http\Controllers;

use App\Models\Usermodel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        $user = UserModel::firstOrNew(['username' => 'manager33']);

    // Hanya set data jika belum ada di DB
    if (!$user->exists) {
        $user->nama = 'Manager Tiga Tiga';
        $user->password = Hash::make('12345');
        $user->level_id = 2;
        $user->save();
    }

    return view('user', ['data' => $user]);
}
    
}