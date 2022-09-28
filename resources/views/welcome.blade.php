<x-app-layout>
    <x-container>
        <div class="flex flex-wrap items-center">
            <div class="w-full md:w-1/2 py-4 order-2 md:order-1">
                <h2 class="text-4xl font-bold text-teal-600">FATAN <span class="font-light">Fashion</span></h2>
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
        <div class="flex flex-wrap items-center py-8 px-4 sm:px-0 bg-teal-700 rounded-xl">
            <div class="w-1/2 md:w-3/4 px-4">
                <form action="">
                    <input type="text" placeholder="Type here" class="input w-full" />
                </form>
            </div>
            <div class="w-1/2 md:w-1/4 px-4">
                <div class="flex  items-center">
                    <span class=" block w-1/4">Filter</span>
                    <select class="select select-bordered w-3/4">
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
                <a href="">Semua</a>
                <a href="">Baju</a>
                <a href="">Celana</a>
                <a href="">Tas</a>
                <a href="">Skincare</a>
            </div>
        </div>
    </x-container>
    <x-container>
        <div class="grid grid-cols-4 gap-4">
            <div class="card card-compact bg-base-100 shadow-xl">
                <figure><img src="https://placeimg.com/400/225/arch" alt="Shoes" class="h-52" /></figure>
                <div class="card-body">
                    <h2 class="card-title">Shoes!</h2>
                    <p>If a dog chews shoes whose shoes does he choose?</p>
                    <div class="card-actions justify-end">
                        <button class="btn btn-primary">Buy Now</button>
                    </div>
                </div>
            </div>
            <div class="card card-compact bg-base-100 shadow-xl">
                <figure><img src="https://placeimg.com/400/225/arch" alt="Shoes" class="h-52" /></figure>
                <div class="card-body">
                    <h2 class="card-title">Shoes!</h2>
                    <p>If a dog chews shoes whose shoes does he choose?</p>
                    <div class="card-actions justify-end">
                        <button class="btn bg-text-teal-600 border-0 btn-sm text-xs">Buy Now</button>
                    </div>
                </div>
            </div>
            <div class="card card-compact bg-base-100 shadow-xl">
                <figure><img src="https://placeimg.com/400/225/arch" alt="Shoes" class="h-52" /></figure>
                <div class="card-body">
                    <h2 class="card-title">Shoes!</h2>
                    <p>If a dog chews shoes whose shoes does he choose?</p>
                    <div class="card-actions justify-end">
                        <button class="btn btn-primary">Buy Now</button>
                    </div>
                </div>
            </div>
            <div class="card card-compact bg-base-100 shadow-xl">
                <figure><img src="https://placeimg.com/400/225/arch" alt="Shoes" class="h-52" /></figure>
                <div class="card-body">
                    <h2 class="card-title">Shoes!</h2>
                    <p>If a dog chews shoes whose shoes does he choose?</p>
                    <div class="card-actions justify-end">
                        <button class="btn btn-primary">Buy Now</button>
                    </div>
                </div>
            </div>
        </div>
    </x-container>
</x-app-layout>
