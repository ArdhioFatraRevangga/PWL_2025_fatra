<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    // Menampilkan daftar user
    public function index() {
        $users = User::all();
        return view('user.index', compact('users'));
    }

    // Menampilkan form tambah user
    public function create() {
        return view('user.create');
    }

    // Menyimpan data user baru menggunakan mass assignment ($fillable)
    public function store(Request $request) {
        User::create($request->all());  // Mass assignment menggunakan $fillable
        return redirect()->route('user.index')->with('success', 'User berhasil ditambahkan');
    }

    // Menampilkan form edit user
    public function edit($id) {
        $user = User::findOrFail($id);
        return view('user.edit', compact('user'));
    }

    // Mengupdate data user
    public function update(Request $request, $id) {
        $user = User::findOrFail($id);
        $user->update($request->all());  // Mass assignment dengan $fillable
        return redirect()->route('user.index')->with('success', 'User berhasil diperbarui');
    }

    // Menghapus user
    public function destroy($id) {
        User::findOrFail($id)->delete();
        return redirect()->route('user.index')->with('success', 'User berhasil dihapus');
    }
}

