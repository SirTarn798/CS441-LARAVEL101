<x-layouts.main>
    <h1>Artists</h1>

    @foreach ($artists as $artist)
        <div>
            <a href="{{route('artists.show', ['artist' => $artist])}}">here</a>
            <img src="{{$artist->image_path}}" alt="">
            <p>{{$artist->name}}</p>
        </div>
    @endforeach
</x-layouts.main>