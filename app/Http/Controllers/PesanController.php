<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\Pesanan;
use App\Models\PesananDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert as FacadesAlert;

class PesanController extends Controller
{
    public function index(Barang $barang)
    {
        return view('pesan.index', [
            "barang" => $barang
        ]);
    }

    public function store(Request $request, Barang $barang)
    {
        $jumlahPesanan = $request->validate([
            "jumlah_pesanan" => 'required',
        ]);

        // Cek jika jumlah pesanan melebihi batas
        if ($request->jumlah_pesanan > $barang->jumlah_barang) {
            Facadesalert::error('error', 'Jumlah Pesanan melebihi stok!');
            return redirect()->back();
        }

        $cekPesanan = Pesanan::where('user_id', Auth::user()->id)->where('status', 0)->first();

        if (empty($cekPesanan)) {
            $dataPesanan['user_id'] = Auth::user()->id;
            $dataPesanan['tanggal_pesanan'] = now();
            $dataPesanan['status'] = 0;
            $dataPesanan['jumlah_harga_pesanan'] = $barang->harga_barang * $request->jumlah_pesanan;
            Pesanan::create($dataPesanan);
        }else {
            $hargaPesananBaru = $barang->jumlah_barang * $request->jumlah_pesanan;
            $dataPesananBaru['jumlah_harga_pesanan'] = $cekPesanan->jumlah_harga_pesanan + $hargaPesananBaru;
            Pesanan::where('id', $cekPesanan->id)->update($dataPesananBaru);
        }

        // Pesanan Detail
        $pesananId = Pesanan::where('user_id', Auth::user()->id)->where('status', 0)->first();

        $cekPesananDetail = PesananDetail::where('barang_id', $barang->id)->where('pesanan_id', $pesananId->id)->first();

        if (empty($cekPesananDetail)) {
            $dataPesananDetail['barang_id'] = $barang->id;
            $dataPesananDetail['pesanan_id'] = $pesananId->id;
            $dataPesananDetail['jumlah_pesanan'] = $request->jumlah_pesanan;
            $dataPesananDetail['jumlah_harga'] = $request->jumlah_pesanan * $barang->harga_barang;
            PesananDetail::create($dataPesananDetail);
        }else {
            $dataPesananDetailBaru['jumlah_pesanan'] = $cekPesananDetail->jumlah_pesanan + $request->jumlah_pesanan;
            $dataPesananDetailBaru['jumlah_harga'] = $cekPesananDetail->jumlah_harga + ($request->jumlah_pesanan * $barang->jumlah_barang);
            PesananDetail::where('id', $cekPesananDetail->id)->update($dataPesananDetailBaru);
        }

        FacadesAlert::success('success', 'Pesanan telah ditambahkan ke keranjang!');
        return redirect('checkout');
    }

    public function checkout() {
        $pesanan = Pesanan::where('user_id', Auth::user()->id)->where('status', 0)->first();
        $pesanan_details = PesananDetail::where('pesanan_id', $pesanan->id)->get();
        return view('pesan.checkout', [
            "pesanan" => $pesanan,
            "pesanan_details" => $pesanan_details
        ]);
    }
}
