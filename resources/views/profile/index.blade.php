<x-app-layout>
    {{-- Breadcumb --}}
    <x-container>
        <div class="text-sm breadcrumbs my-6">
            <ul>
                <li><a href="{{ route('dashboard') }}">Dashboard</a></li>
                {{-- <li><a href="{{ route('dashboard') }}">Dashboard</a></li> --}}
                <li>Profile</li>
            </ul>
        </div>
    </x-container>
    {{-- Akhir Breadcumb --}}

    {{-- profile --}}
    <x-container>
        <div class="grid grid-cols-2 gap-4 mb-12">
            <div class="card card-side bg-base-100 shadow-xl flex flex-wrap justify-center">
                <div class="card-body">
                    Profile
                    <img src="https://placeimg.com/400/225/arch" alt="" class="w-72 rounded-xl">
                        <table class="table bg-white border-none text-slate-700">
                            <tr>
                                <td>
                                </td>
                            </tr>
                            <tr>
                                <td align="left" width="10%">Nama</td>
                                <td align="left">:</td>
                                <td align="left">{{ $profile->name }}</td>
                            </tr>
                            <tr>
                                <td align="left">Email</td>
                                <td align="left">:</td>
                                <td align="left">{{ $profile->email }}</td>
                            </tr>
                            <tr>
                                <td align="left">Alamat</td>
                                <td align="left">:</td>
                                <td align="left">{{ $profile->address }}</td>
                            </tr>
                            <tr>
                                <td align="left">No. Handphone</td>
                                <td align="left">:</td>
                                <td align="left">{{ $profile->phone }}</td>
                            </tr>
                        </table>
                </div>
            </div>
            <div class="card card-side bg-base-100 shadow-xl flex flex-wrap justify-center">
                <div class="card-body">
                    <h1>Update Profile</h1>
                    <form method="POST" action="{{ route('profile.update', $profile->id) }}">
                        @method('put')
                        @csrf

                        <!-- Name -->
                        <div>
                            <x-input-label for="name" :value="__('Name')" />

                            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name"
                                :value="old('name', $profile->name )" required autofocus />
                        </div>

                        <!-- Email Address -->
                        <div class="mt-4">
                            <x-input-label for="email" :value="__('Email')" />

                            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email"
                                :value="old('email', $profile->email)" required />
                        </div>

                        <!-- Address -->
                        <div class="mt-4">
                            <x-input-label for="address" :value="__('Address')" />

                            <x-text-input id="address" class="block mt-1 w-full" type="text" name="address"
                                :value="old('address', $profile->address)" required />
                        </div>
                        <!-- Email Address -->
                        <div class="mt-4">
                            <x-input-label for="phone" :value="__('No. Handphone')" />

                            <x-text-input id="phone" class="block mt-1 w-full" type="text" name="phone"
                                :value="old('phone', $profile->phone)" required />
                        </div>

                        <!-- Password -->
                        <div class="mt-4">
                            <x-input-label for="password" :value="__('Password')" />
                            <x-text-input id="password" class="block mt-1 w-full" type="password" name="password"
                                 autocomplete="new-password" />
                        </div>

                        <!-- Confirm Password -->
                        <div class="mt-4">
                            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

                            <x-text-input id="password_confirmation" class="block mt-1 w-full" type="password"
                                name="password_confirmation" />
                        </div>

                        <div class="flex items-center justify-end mt-4">
                            <button type="submit" class="btn bg-teal-600 border-none">Update</button>
                        </div>
                    </form>
                </div>
            </div>

    </x-container>

</x-app-layout>
