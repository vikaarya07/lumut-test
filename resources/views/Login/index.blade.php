<x-layout-login>
    <x-slot:title>{{ $title }}</x-slot:title>

    <div class="min-h-screen bg-white text-hitam flex justify-center items-center">
        <div class="max-w-screen-xl m-5 bg-sky-200 shadow-full rounded-lg grid grid-cols-1 md:grid-cols-2">
            <div class="bg-sky-300/25 hidden md:flex justify-center items-center p-12 rounded-l-lg">
                <img src="../img/login.svg" class="h-full w-full max-w-md rounded-md" alt="Gambar Tidak Ditemukan">
            </div>
            <div class="p-6 sm:p-12 flex flex-col justify-center">
                <div class="mx-auto max-w-sm text-center space-y-4">
                    <h3 class="text-2xl font-bold">ADMIN LOGIN</h3>
                    <p class="text-sm font-normal">Selamat datang di halaman Admin Login. Silahkan masukkan
                        Username dan Password</p>
                </div>
                @if (Session::has('error'))
                    <div class="mt-3 py-3 bg-redSat text-center rounded-lg">
                        <p class="text-sm font-semibold text-red">Username atau Password Salah</p>
                    </div>
                @endif
                <form action="{{ route('login') }}" method="POST" class="mt-5 mx-auto max-w-sm w-full">
                    @csrf
                    <input
                        class="w-full px-6 py-4 rounded-lg bg-white border border-gray-400 placeholder-gray-500 text-sm focus:outline-none focus:ring focus:ring-sky-300 focus:bg-white"
                        type="text" placeholder="username" name="username" required>
                    @error('username')
                        <p class="mt-2 text-red text-sm">{{ $message }}</p>
                    @enderror

                    <div class="relative w-full" x-data="{ show: true }">
                        <input :type="show ? 'password' : 'text'"
                            class="w-full px-6 py-4 rounded-lg font-medium bg-white border border-gray-400 placeholder-gray-500 text-sm focus:outline-none focus:ring focus:ring-offset-sky-300 focus:bg-white mt-5"
                            type="password" placeholder="Password" name="password" required />
                        <div class="absolute bottom-4 right-0 pr-6 flex items-center text-sm leading-5">
                            <svg class="h-4 text-gray-700" fill="none" @click="show = !show"
                                :class="{ 'hidden': !show, 'block': show }" xmlns="http://www.w3.org/2000/svg"
                                viewbox="0 0 576 512">
                                <path fill="currentColor"
                                    d="M572.52 241.4C518.29 135.59 410.93 64 288 64S57.68 135.64 3.48 241.41a32.35 32.35 0 0 0 0 29.19C57.71 376.41 165.07 448 288 448s230.32-71.64 284.52-177.41a32.35 32.35 0 0 0 0-29.19zM288 400a144 144 0 1 1 144-144 143.93 143.93 0 0 1-144 144zm0-240a95.31 95.31 0 0 0-25.31 3.79 47.85 47.85 0 0 1-66.9 66.9A95.78 95.78 0 1 0 288 160z">
                                </path>
                            </svg>
                            <svg class="h-4 text-gray-700" fill="none" @click="show = !show"
                                :class="{ 'block': !show, 'hidden': show }" xmlns="http://www.w3.org/2000/svg"
                                viewbox="0 0 640 512">
                                <path fill="currentColor"
                                    d="M320 400c-75.85 0-137.25-58.71-142.9-133.11L72.2 185.82c-13.79 17.3-26.48 35.59-36.72 55.59a32.35 32.35 0 0 0 0 29.19C89.71 376.41 197.07 448 320 448c26.91 0 52.87-4 77.89-10.46L346 397.39a144.13 144.13 0 0 1-26 2.61zm313.82 58.1l-110.55-85.44a331.25 331.25 0 0 0 81.25-102.07 32.35 32.35 0 0 0 0-29.19C550.29 135.59 442.93 64 320 64a308.15 308.15 0 0 0-147.32 37.7L45.46 3.37A16 16 0 0 0 23 6.18L3.37 31.45A16 16 0 0 0 6.18 53.9l588.36 454.73a16 16 0 0 0 22.46-2.81l19.64-25.27a16 16 0 0 0-2.82-22.45zm-183.72-142l-39.3-30.38A94.75 94.75 0 0 0 416 256a94.76 94.76 0 0 0-121.31-92.21A47.65 47.65 0 0 1 304 192a46.64 46.64 0 0 1-1.54 10l-73.61-56.89A142.31 142.31 0 0 1 320 112a143.92 143.92 0 0 1 144 144c0 21.63-5.29 41.79-13.9 60.11z">
                                </path>
                            </svg>
                        </div>
                    </div>

                    <button
                        class="mt-5 text-lg font-semibold bg-sky-800 text-white w-full py-3 rounded-lg hover:bg-sky-800/75 transition-all duration-300 ease-in-out focus:shadow-outline focus:outline-none"
                        type="submit">
                        LOGIN
                    </button>
                </form>
            </div>
        </div>
    </div>

</x-layout-login>
