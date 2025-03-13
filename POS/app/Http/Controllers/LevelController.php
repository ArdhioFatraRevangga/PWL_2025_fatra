<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LevelController extends Controller
{
    public function index()
    {
        $levels = DB::select('SELECT * FROM m_level');
        return view('level', ['levels' => $levels]);
    }

    public function add()
    {
        DB::insert('INSERT INTO m_level (level_name) VALUES (?)', ['Supervisor']);
        return "Data berhasil ditambahkan";
    }

    public function update()
    {
        DB::update('UPDATE m_level SET level_name = ? WHERE id = ?', ['Manager', 1]);
        return "Data berhasil diupdate";
    }

    public function delete()
    {
        DB::delete('DELETE FROM m_level WHERE id = ?', [2]);
        return "Data berhasil dihapus";
    }
}

