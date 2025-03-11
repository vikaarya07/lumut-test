<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>

    <x-title>
        <div
            class="mx-auto mt-6 mb-12 grid max-w-2xl grid-cols-1 gap-5 lg:mx-0 lg:max-w-none md:grid-cols-2 lg:grid-cols-4">
            @foreach ($posts as $post)
                <a href="{{ route('posts.show', $post->slug) }}"
                    class="relative flex max-w-sm flex-col overflow-hidden rounded-xl bg-putih bg-clip-border text-gray-700 shadow-md shadow-primary/20 hover:shadow-lg hover:shadow-primary/30">
                    <div class="p-4 mb-8 text-justify">
                        <h1 class="block text-lg antialiased font-semibold leading-snug tracking-normal">
                            {{ $post->title }}
                        </h1>
                        <p class="block mt-3 text-sm antialiased font-normal leading-relaxed text-gray-700">
                            {{ Str::limit($post->content, 100) }}
                        </p>
                    </div>
                    <div class="flex items-center p-4 pb-3 absolute bottom-0 space-x-2">
                        <p class="py-1 px-2 text-xs font-medium rounded-lg bg-slate-200">
                            {{ $post->user->username }}</p>
                        <p class="block text-xs antialiased font-normal leading-relaxed text-inherit">
                            {{ $post->created_at->diffForHumans() }}
                        </p>
                    </div>
                </a>
            @endforeach

        </div>

        @if ($posts->isEmpty())
            <h3 class="text-base font-medium text-center text-gray-700 my-12">Tidak Ada Data post</h3>
        @endif

        {{ $posts->links() }}

    </x-title>
</x-layout>
