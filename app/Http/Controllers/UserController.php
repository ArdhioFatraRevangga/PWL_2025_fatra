<?php

namespace App\Http\Controllers;

use App\Models\UserModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    // Tampilkan semua data user (tanpa relasi)
    public function index()
    {
        $data = UserModel::all(); // Ambil semua data user dari tabel m_user
        return view('user.index', compact('data')); // Kirim ke view resources/views/user/index.blade.php
    }

    // Tampilkan semua data user beserta data level (pakai relasi)
    public function index_with_level()
    {
        $user = UserModel::with('level')->get(); // Ambil user dan relasi level
        return view('user.index', ['data' => $user]); // Kirim ke view user/index.blade.php
    }

    // Tampilkan form ubah data user
    public function ubah($id)
    {
        $user = UserModel::find($id);
        if (!$user) {
            return redirect()->route('user.index')->with('error', 'User tidak ditemukan');
        }
        return view('user_ubah', ['data' => $user]);
    }

    // Simpan perubahan data user dari form ubah
    public function ubah_simpan($id, Request $request)
    {
        $validated = $request->validate([
            'username' => 'required|string|max:255',
            'nama' => 'required|string|max:255',
            'level_id' => 'required|integer',
            'password' => 'nullable|string|min:6',
        ]);

        $user = UserModel::find($id);
        if (!$user) {
            return redirect()->route('user.index')->with('error', 'User tidak ditemukan');
        }

        $user->username = $request->username;
        $user->nama = $request->nama;
        $user->level_id = $request->level_id;

        if ($request->filled('password')) {
            $user->password = Hash::make($request->password);
        }

        $user->save();

        return redirect()->route('user.index')->with('success', 'Data user berhasil diperbarui');
    }

    // Hapus data user
    public function hapus($id)
    {
        $user = UserModel::find($id);
        if (!$user) {
            return redirect()->route('user.index')->with('error', 'User tidak ditemukan');
        }

        $user->delete();

        return redirect()->route('user.index')->with('success', 'User berhasil dihapus');
    }
}
