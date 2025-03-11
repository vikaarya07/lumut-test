<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>

    <div class="bg-putih py-28">
        <div class="mx-auto max-w-4xl px-6 lg:px-8">
            <h1 class="text-xl font-bold tracking-tight text-gray-900 uppercase lg:text-2xl">{{ $post->title }}
            </h1>
            <div class="flex pt-2 gap-2 items-center">
                <p class="py-1 px-2 text-xs font-medium rounded-lg bg-slate-200">
                    {{ Auth::user()->username }}</p>
                <p class="block text-xs text-gray-700 antialiased font-normal leading-relaxed">
                    {{ $post->created_at->diffForHumans() }}
                </p>
            </div>
            <div class="mt-10 prose max-w-none prose-sm prose-blue">
                {{ $post->content }}
            </div>
        </div>
    </div>
</x-layout>
