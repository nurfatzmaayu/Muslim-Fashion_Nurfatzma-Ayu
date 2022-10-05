<x-guest-layout>
    <x-auth-card>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
            <!-- Email Address -->
            <div>
                <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus  placeholder="Email"/>
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-text-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="current-password" placeholder="Password" />
            </div>

            <div class="grid grid-cols-1 items-center justify-between mt-4">


                <x-primary-button class="w-full text-center">
                    Masuk
                </x-primary-button>
                <span class="text-center text-slate-500 py-2">Atau</span>
                <div class="w-full pb-5">
                    <a href="{{ url('auth/googlelogin') }}" class="flex justify-center items-center text-slate-600">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/53/Google_%22G%22_Logo.svg/2048px-Google_%22G%22_Logo.svg.png" alt="" class="w-4 mr-1"> Masuk dengan Google
                    </a>
                </div>
            </div>
        </form>
        <hr class="pb-5">
        <div class="card">
            <a class="text-xs text-gray-600 hover:text-gray-900 text-center" href="{{ route('register') }}">
                Belum registrasi? <span class="font-semibold text-teal-600"> Silahkan registrasi!</span>
            </a>
        </div>
    </x-auth-card>
</x-guest-layout>
