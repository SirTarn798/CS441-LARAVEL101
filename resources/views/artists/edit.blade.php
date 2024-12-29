<x-layouts.main>
    <div class="bg-white shadow-md rounded-md overflow-hidden max-w-lg mx-auto mt-16">
        <h2 class="py-2 px-4 text-center font-bold text-2xl uppercase bg-pink-100">
            Edit Artist
        </h2>
        <div class="px-2 py-2">
            <form action="{{ route('artists.update', ['artist' => $artist]) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="mb-5">
                    <label for="name" class="block mb-2 font-bold text-gray-600">Artist Name</label>
                    <x-text-input type="text" id="name"
                           name="name" value="{{ $artist->name }}"
                           autocomplete="off" placeholder="Put in artist name"
                           class="border border-gray-300 shadow p-3 w-full rounded mb-"></x-text-input>
                </div>
                <button type="submit" class="block mx-auto bg-emerald-400 text-white font-bold px-4 py-2 rounded-lg">
                    Edit
                </button>
            </form>
        </div>
    </div>
</x-layouts.main>