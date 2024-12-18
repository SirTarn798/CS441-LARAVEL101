<x-layouts.main>

    <body class="bg-gray-100 p-4">
        <h1 class="text-center text-3xl font-bold mb-6">Favorite Songs</h1>
        <p class="text-center mb-5">
            <a href="/" class="text-light text-gray-600 hover:underline">About</a>
        </p>
        <div class="max-w-2xl mx-auto space-y-4">
            @foreach ($songs as $song)
                <x-song-component :song="$song"></x-song-component>
            @endforeach
        </div>
    </body>

</x-layouts.main>