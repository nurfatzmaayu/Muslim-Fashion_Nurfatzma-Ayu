<x-app-layout>
    {{-- Breadcumb --}}
    <x-container>
        <div class="text-sm breadcrumbs my-6">
            <ul>
                <li><a href="{{ route('dashboard') }}">Dashboard</a></li>
                <li>Pesan</li>
            </ul>
        </div>
    </x-container>
    {{-- Akhir Breadcumb --}}


    {{-- Pesanan --}}
    <x-container>
        <div class="card card-side bg-base-100 shadow-xl flex flex-wrap justify-center">
            <figure><img src="https://placeimg.com/400/400/arch" alt="Movie" class="w-full" /></figure>
            <div class="card-body">
                <h2 class="card-title text-2xl pb-5">{{ $barang->nama_barang }}</h2>
                <table>
                    <tr align="left">
                        <td class="py-2" width="40%">Harga</td>
                        <th>Rp. {{ number_format($barang->harga_barang) }}</th>
                    </tr>
                    <tr align="left">
                        <td class="py-2" width="40%">Stok</td>
                        <th width="20%">{{ $barang->jumlah_barang }}</th>
                    </tr>
                    <tr align="left">
                        <td class="py-2" width="40%">Harga</td>
                        <th width="20%">{{ $barang->keterangan_barang }}</th>
                    </tr>
                    <tr align="left">
                        <td class="py-2" width="40%">Jumlah Pesan</td>
                        <form action="{{ route('pesan.store', $barang->id) }}" method="post">
                            @csrf
                        <th width="20%">
                            <input type="text" name="jumlah_pesanan"
                                class="input w-full bg-white border fouc:ring focus:ring-0 focus:border-teal-600 border-teal-400">
                                @error('jumlah_pesanan')
                                    <span class="text-red-500 text-xs">{{ $message }}</span>
                                @enderror
                        </th>
                        <th>
                                <button type="submit" class="btn bg-teal-600 border-0"><svg
                                        xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        fill="currentColor" class="bi bi-cart-plus" viewBox="0 0 16 16">
                                        <path
                                            d="M9 5.5a.5.5 0 0 0-1 0V7H6.5a.5.5 0 0 0 0 1H8v1.5a.5.5 0 0 0 1 0V8h1.5a.5.5 0 0 0 0-1H9V5.5z" />
                                        <path
                                            d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1H.5zm3.915 10L3.102 4h10.796l-1.313 7h-8.17zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0z" />
                                    </svg></button>
                                </th>
                            </form>
                    </tr>


                </table>
            </div>
        </div>
    </x-container>
    {{-- Akhir Pesanan --}}
</x-app-layout>
