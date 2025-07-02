<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>

    {{-- Loop Artikel --}}
    @foreach ($posts as $post)

    <article class="py-8 max-w-screen-md mx-auto border-b border-gray-300">
        <a href="/posts/{{ $post['slug'] }}" class="hover:underline">
            <h2 class="mb-1 text-3xl tracking-tight font-bold text-gray-900">
                {{ $post['title'] }}
            </h2>
        </a>
        <div class="text-base text-gray-500 mb-2">
            <a href="#" class="hover:underline">{{ $post['author'] }}</a> |
            dibuat 2 Juli 2025
        </div>
        <p class="my-4 font-light text-gray-700">
            {{ Str::limit ($post['body'], 50) }}
        </p>
        <a href="/posts/{{ $post['slug'] }}" class="font-medium text-blue-600 hover:underline">
            Read More &raquo;
        </a>
    </article>

    @endforeach

    {{-- Tombol Contact Me --}}
    <div class="flex justify-center mt-10 mb-6">
        <a href="/contact" class="bg-green-600 text-white px-6 py-3 rounded-lg text-lg font-semibold hover:bg-green-700 transition-all">
            Contact Me
        </a>
    </div>
</x-layout>
