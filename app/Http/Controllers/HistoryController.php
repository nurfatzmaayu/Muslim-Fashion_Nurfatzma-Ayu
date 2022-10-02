<?php

namespace App\Http\Controllers;

use App\Models\Pesanan;
use App\Models\PesananDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HistoryController extends Controller
{
    public function index() {
        $pesanan = Pesanan::where('user_id', Auth::user()->id)->where('status', '!=', 0)->get();
        return view('history.index', [
            "pesanans" => $pesanan
        ]);
    }

    public function show(Pesanan $pesanan) {
        $pesanan_detail = PesananDetail::where('pesanan_id', $pesanan->id)->get();
        return view('history.show', [
            "pesanan" => $pesanan,
            "pesanan_details" => $pesanan_detail
        ]);
    }
}
