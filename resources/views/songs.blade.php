<x-layout>
    <h1>Songs</h1>

    <div>
        {{ session('message') }}
    </div>

    <a href="{{ route('playlist.create') }}">create</a>
    <div>
        @foreach($songs as $song)
            <p>{{ Str::words($song->song, 30) }}</p>
            <a href="{{ route('playlist.show', $song->id) }}">Show</a>
            <a href="{{ route('playlist.edit', $song->id) }}">Edit</a>
            <a href="#">Show</a>
            <form action="{{ route( 'playlist.destroy' , $song->id) }}" method="post">
                @csrf
                @method('delete');
                <button type="submit">Delete</button>
            </form>

            
        @endforeach
    </div>
</x-layout>

