<x-dashboard.layout>
    <x-slot:title>{{ $title }}</x-slot:title>

    <x-dashboard.breadcrumbs>
        <x-slot:title>{{ $title }}</x-slot:title>

        <div class="w-full lg:w-2/3 mt-3 mb-28">

            <h1 class="text-2xl font-bold text-black">Form Tambah Post</h1>

            <form action="{{ route('admin.posts.store') }}" method="POST" class="mt-3" enctype="multipart/form-data">
                @csrf
                <div>
                    <label for="title" class="block text-sm text-hitam capitalize">Post Title <span
                            class="text-red-700">*</span></label>
                    <input id="title" type="text" name="title" value="{{ old('title') }}"
                        class="block w-full px-3 py-2 mt-2 text-hitam bg-white border border-gray-300 rounded-md focus:border-teal-500 focus:outline-none focus:ring focus:ring-teal-500 focus:ring-opacity-40"
                        required>
                    @error('title')
                        <p class="mt-2 text-red-700 text-sm">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mt-4">
                    <label for="content" class="block text-sm text-hitam capitalize">Content <span
                            class="text-red-700">*</span></label>
                    <textarea id="content" type="text" name="content" value="" rows="5"
                        class="block w-full px-3 py-2 mt-2 text-hitam bg-white border border-gray-300 rounded-md focus:border-teal-500 focus:outline-none focus:ring focus:ring-teal-500 focus:ring-opacity-40"
                        required>{{ old('content') }}</textarea>
                    @error('deskripsi')
                        <p class="mt-2 text-red-700 text-sm">{{ $message }}</p>
                    @enderror
                </div>

                <div class="flex justify-start mt-10 space-x-2">
                    <button type="submit"
                        class="px-5 py-2 text-sm tracking-wide text-white capitalize transition-colors duration-200 transform bg-teal-500 rounded-md hover:bg-teal-500/80 focus:outline-none focus:bg-primary focus:ring focus:ring-indigo-300 focus:ring-opacity-50">
                        Tambah
                    </button>
                    <button type="button" onclick="window.location.href='{{ route('admin.posts.index') }}'"
                        class="px-5 py-2 text-sm tracking-wide text-white capitalize transition-colors duration-200 transform bg-red-500 rounded-md hover:bg-red-500/80 focus:outline-none focus:ring focus:ring-red focus:ring-opacity-50">
                        Batal
                    </button>
                </div>
            </form>
        </div>

    </x-dashboard.breadcrumbs>

</x-dashboard.layout>
