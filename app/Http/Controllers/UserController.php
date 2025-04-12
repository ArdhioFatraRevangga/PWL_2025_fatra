<?php

namespace App\Http\Controllers;

use App\Models\UserModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    // Tampilkan semua data user (index)
    public function index()
    {
        // Ambil semua data user
        $data = UserModel::all();
        return view('user.index', compact('data')); // Kirim data ke view user.index
    }

    // Tampilkan form untuk ubah data user
    public function ubah($id)
    {
        // Cari user berdasarkan ID
        $user = UserModel::find($id);
        
        // Pastikan data ditemukan, jika tidak, redirect dengan pesan error
        if (!$user) {
            return redirect()->route('user.index')->with('error', 'User tidak ditemukan');
        }

        return view('user_ubah', ['data' => $user]); // Kirim data user ke view user_ubah
    }

    // Simpan perubahan data user setelah form ubah disubmit
    public function ubah_simpan($id, Request $request)
    {
        // Validasi input form
        $validated = $request->validate([
            'username' => 'required|string|max:255',
            'nama' => 'required|string|max:255',
            'level_id' => 'required|integer',
            'password' => 'nullable|string|min:6', // Validasi password jika ada perubahan
        ]);

        // Cari user berdasarkan ID
        $user = UserModel::find($id);
        
        // Pastikan data ditemukan, jika tidak, redirect dengan pesan error
        if (!$user) {
            return redirect()->route('user.index')->with('error', 'User tidak ditemukan');
        }

        // Update data user
        $user->username = $request->username;
        $user->nama = $request->nama;
        $user->level_id = $request->level_id;

        // Jika password diubah, hash password baru dan simpan
        if ($request->filled('password')) {
            $user->password = Hash::make($request->password);
        }

        // Simpan perubahan ke database
        $user->save();

        // Redirect ke halaman daftar user dengan pesan sukses
        return redirect()->route('user.index')->with('success', 'Data user berhasil diperbarui');
    }

    // Hapus data user
    public function hapus($id)
    {
        // Cari user berdasarkan ID
        $user = UserModel::find($id);

        // Pastikan user ditemukan, jika tidak, redirect dengan pesan error
        if (!$user) {
            return redirect()->route('user.index')->with('error', 'User tidak ditemukan');
        }

        // Hapus user
        $user->delete();

        // Redirect ke halaman user dengan pesan sukses
        return redirect()->route('user.index')->with('success', 'User berhasil dihapus');
    }
}
