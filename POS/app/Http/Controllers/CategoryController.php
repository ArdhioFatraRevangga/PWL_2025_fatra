<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    public function index() {
        $categories = DB::table('m_kategori')->get();
        return view('category', ['categories' => $categories]);
    }

    public function add() {
        DB::table('m_kategori')->insert(['kategori_name' => 'Elektronik']);
        return "Data kategori berhasil ditambahkan";
    }

    public function update() {
        DB::table('m_kategori')->where('id', 1)->update(['kategori_name' => 'Gadget']);
        return "Data kategori berhasil diperbarui";
    }

    public function delete() {
        DB::table('m_kategori')->where('id', 2)->delete();
        return "Data kategori berhasil dihapus";
    }
}
