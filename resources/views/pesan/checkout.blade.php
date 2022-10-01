<x-app-layout>
    {{-- Breadcumb --}}
    <x-container>
        <div class="text-sm breadcrumbs my-6">
            <ul>
                <li><a href="{{ route('dashboard') }}">Dashboard</a></li>
                <li>Checkout</li>
            </ul>
        </div>
    </x-container>
    {{-- Akhir Breadcumb --}}


    {{-- Pesanan --}}
    <x-container>
        <div class="card w-full bg-base-100 shadow-xl">
            <div class="card-body">
                <h2 class="card-title">Checkout</h2>
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
                                <th>Aksi</th>
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
                                    <td>
                                        <form action="{{ route('destroy', $pesan->id) }}" method="post">
                                            @csrf
                                            @method('delete')

                                            <button type="submit" class="btn btn-error btn-sm text-white"><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
                                                    <path
                                                        d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z" />
                                                </svg></button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            <tr>
                                <td colspan="4" align="right">Total Harga : </td>
                                <td>Rp. {{ number_format($pesanan->jumlah_harga_pesanan) }}</td>
                                <td>
                                    <form action="">
                                        <button type="submit" class="btn border-0 bg-teal-600">Checkout</button>
                                    </form>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                @else
                <span>Anda belum memiliki pesanan. Silahkan pesan!</span>
                @endif
            </div>
        </div>
    </x-container>
    {{-- Akhir Pesanan --}}
</x-app-layout>
