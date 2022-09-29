<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index() {
        return view('welcome', [
            'barangs' => Barang::paginate(5)
        ]);
    }
}
