<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index() {
        return 'Welcome';
    }

    public function about() {
        return 'NIM: 2341760166, Nama: Fatra';
    }

    public function articles($id) {
        return "Article Page with ID: " . $id;
    }
}
