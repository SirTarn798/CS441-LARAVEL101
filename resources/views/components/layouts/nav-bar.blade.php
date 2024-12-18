<nav class="flex">
    <x-nav.link route-name="about.index" href="{{ route('about.index') }}">About</x-nav.link>
    <x-nav.link :route-name="'songs.' . 'index'" :href="route('songs.index')">Songs</x-nav.link>
</nav>