<x-app-layout>
    {{-- Breadcumb --}}
    <x-container>
        <div class="text-sm breadcrumbs my-6">
            <ul>
                <li><a href="{{ route('dashboard') }}">Dashboard</a></li>
                <li><a href="{{ route('history') }}">History</a></li>
                <li>Detail Pemesanan</li>
            </ul>
        </div>
    </x-container>
    {{-- Akhir Breadcumb --}}


    {{-- Pesanan --}}
    <x-container>
        <div class="card w-full bg-base-100 shadow-xl">
            <div class="card-body">
                <h3 class="tetx-xl">Sukses Checkout</h3>
                <p>Pesanan Anda telah sukses dicheckout. Selanjutnya untuk pembayaran, silahkan transfer ke <br> <strong>BANK BRI</strong> No. Rekening <strong>1232 7328 89239</strong> dengan nominal <strong class="text-xl">Rp. {{ number_format($pesanan->jumlah_harga_pesanan + $pesanan->kode_unik) }}</strong></p>
            </div>
            <div class="card-body">
                <h2 class="card-title">Detail Pemesanan</h2>
                @if (!empty($pesanan))
                <div class="overflow-x-auto">
                    <table class="table w-full">
                        <!-- head -->
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Barang</th>
                                <th>Jumlah</th>
                                <th>Harga</th>
                                <th>Total Harga</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- row 1 -->
                            @foreach ($pesanan_details as $pesan)
                                <tr>
                                    <th>{{ $loop->iteration }}</th>
                                    <td>{{ $pesan->barang->nama_barang }}</td>
                                    <td>{{ $pesan->jumlah_pesanan }}</td>
                                    <td>Rp. {{ number_format($pesan->barang->harga_barang) }}</td>
                                    <td>Rp. {{ number_format($pesan->jumlah_harga) }}</td>
                                </tr>
                            @endforeach
                            <tr>
                                <td colspan="4" align="right">
                                    Kode Unik :
                                </td>
                                <td>{{ $pesanan->kode_unik }}</td>
                            </tr>
                            <tr>
                                <td colspan="4" align="right">Total yang harus dibayarkan adalah : </td>
                                <td>Rp. {{ number_format($pesanan->jumlah_harga_pesanan + $pesanan->kode_unik) }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                @else
                <span>Anda belum melakukan checkout. Silahkan checkout!</span>
                @endif
            </div>
        </div>
    </x-container>
    {{-- Akhir Pesanan --}}
</x-app-layout>
