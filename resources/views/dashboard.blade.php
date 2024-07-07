<x-app-layout>
    <x-container>
        <div class="flex flex-wrap items-center px-4 sm:px-0">
            <div class="w-full md:w-1/2 py-4 order-2 md:order-1">
                <h2 class="text-4xl font-bold text-teal-600">Muslim <span class="font-light">Fashion</span></h2>
                <p>Menjual berbagai macam pakaian pria, wanita dan anak-anak</p>
            </div>
            <div class="w-full md:w-1/2 text-center order-1 md:order-2 my-4 ">
                <span class="block text-xl uppercase"><svg xmlns="http://www.w3.org/2000/svg" width="26" height="26"
                        fill="currentColor" class="bi bi-chat-left-quote-fill text-teal-600 " viewBox="0 0 16 16">
                        <path
                            d="M0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H4.414a1 1 0 0 0-.707.293L.854 15.146A.5.5 0 0 1 0 14.793V2zm7.194 2.766a1.688 1.688 0 0 0-.227-.272 1.467 1.467 0 0 0-.469-.324l-.008-.004A1.785 1.785 0 0 0 5.734 4C4.776 4 4 4.746 4 5.667c0 .92.776 1.666 1.734 1.666.343 0 .662-.095.931-.26-.137.389-.39.804-.81 1.22a.405.405 0 0 0 .011.59c.173.16.447.155.614-.01 1.334-1.329 1.37-2.758.941-3.706a2.461 2.461 0 0 0-.227-.4zM11 7.073c-.136.389-.39.804-.81 1.22a.405.405 0 0 0 .012.59c.172.16.446.155.613-.01 1.334-1.329 1.37-2.758.942-3.706a2.466 2.466 0 0 0-.228-.4 1.686 1.686 0 0 0-.227-.273 1.466 1.466 0 0 0-.469-.324l-.008-.004A1.785 1.785 0 0 0 10.07 4c-.957 0-1.734.746-1.734 1.667 0 .92.777 1.666 1.734 1.666.343 0 .662-.095.931-.26z" />
                    </svg> Kepuasan pelanggan adalah prioritas kami</span>
            </div>
        </div>
    </x-container>
    <x-container>
        <div class="flex flex-wrap items-center py-8 px-4 sm:px-0 rounded-xl">
            <div class="w-1/2 md:w-3/4 pr-4">
                <form action="">
                    <input type="text" placeholder="Type here" class="input w-full" />
                </form>
            </div>
            <div class="w-1/2 md:w-1/4 pl-4">
                <div class="flex  items-center">
                    <span class=" block w-1/4">Filter</span>
                    <select class="select w-3/4">
                        <option disabled selected>Pick one</option>
                        <option>Star Wars</option>
                        <option>Harry Potter</option>
                        <option>Lord of the Rings</option>
                        <option>Planet of the Apes</option>
                        <option>Star Trek</option>
                    </select>
                </div>
            </div>
        </div>
    </x-container>
    <x-container>
        <div class="w-full px-4 py-8">
            <div class="flex flex-wrap justify-center gap-8">
                <a href="{{ route('dashboard') }}" class="text-lg {{ Request::is('dashboard') ? 'font-bold' : '' }}">Semua</a>
                @foreach ($categories as $category)
                <a href="{{ route('categories.show', $category->slug ) }}"
                    class="text-lg {{ Request::is('categories') ? 'font-bold' : '' }}">{{ $category->nama_kategori }}</a>
                    @endforeach
            </div>
        </div>
    </x-container>
    <x-container>
        <div class="grid grid-cols-2 md:grid-cols-5 gap-4 px-4 sm:px-0">
            @foreach ($barangs as $barang)
                <div class="card card-compact bg-base-100 shadow-xl">
                    <span
                        class="block absolute p-2 bg-teal-600 text-white opacity-80 rounded-b-lg rounded-l-none">{{ $barang->jumlah_barang }} {{$barang->gambar_barang}}</span>
                    <img src="{{asset('img/'. $barang->gambar_barang)}}" alt="Shoes" class="h-52" />
                    <div class="card-body">
                        <h2 class="card-title text-base">{{ $barang->nama_barang }}</h2>
                        <div class="card-actions justify-end">
                            <p class="text-base text-slate-800">Rp. {{ number_format($barang->harga_barang) }}</p>
                            @auth
                                <a href="{{ route('pesan', $barang->id) }}" class="btn bg-teal-600 border-0 btn-sm"><svg
                                        xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                        class="bi bi-bag-plus-fill" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd"
                                            d="M10.5 3.5a2.5 2.5 0 0 0-5 0V4h5v-.5zm1 0V4H15v10a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V4h3.5v-.5a3.5 3.5 0 1 1 7 0zM8.5 8a.5.5 0 0 0-1 0v1.5H6a.5.5 0 0 0 0 1h1.5V12a.5.5 0 0 0 1 0v-1.5H10a.5.5 0 0 0 0-1H8.5V8z" />
                                    </svg></a>
                            @else

                            @endauth
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="pt-4 pb-12">
            {{ $barangs->links() }}
        </div>
    </x-container>
</x-app-layout>
