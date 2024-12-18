<div class="flex items-center p-4 gap-4 bg-white rounded-lg shadow-md">
                <img src="{{$song['cover']}}" alt="{{$song['title']}}" class="w-32 h-32 rounded-lg" />
                <div class="flex-1">
                    <p class="text-2xl font-bold">{{$song['title']}}</p>
                    <p class="font-light text-gray-600">{{$song['artist']}}</p>

                    <div class="flex flex-wrap gap-2 mt-2">
                        @foreach ($song['genres'] as $genre)
                            <p class="px-2 mr-3 bg-slate-400 rounded-xl">{{$genre}}</p>
                        @endforeach
                    </div>
                </div>
            </div>