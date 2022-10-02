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
                <h2 class="card-title">History</h2>
                @if (!empty($pesanans))
                <div class="overflow-x-auto">
                    <table class="table w-full">
                        <!-- head -->
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Tanggal</th>
                                <th>Status</th>
                                <th>Jumlah Harga</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- row 1 -->
                            @foreach ($pesanans as $pesan)
                                <tr>
                                    <th>{{ $loop->iteration }}</th>
                                    <td>{{ $pesan->created_at }}</td>
                                    <td>
                                        @if ($pesan->status == 1)
                                            Sudah Pesan dan Belum di bayar
                                        @else
                                            Sudah bayar
                                        @endif
                                    </td>
                                    <td>Rp. {{ number_format($pesan->jumlah_harga_pesanan + $pesan->kode_unik) }}</td>
                                    <td>
                                        <a href="{{ route('history.show', $pesan->id) }}" class="btn btn-success text-white"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye-fill" viewBox="0 0 16 16">
                                            <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
                                            <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
                                          </svg></a>
                                </td>
                                </tr>
                            @endforeach
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
