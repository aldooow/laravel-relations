<h1>Title: {{ $album->title }}</h1>
<ul>
  <li>Artist: {{ $album->artist }}</li>
  <li>Year: {{ $album->year }}</li>
</ul>
<a href="{{ route('albums.index') }}">Back</a>

<h2>List Song: </h2>
<ul>
  @foreach ($album->songs as $song)
    <li>{{ $song->title }}</li>
  @endforeach
</ul>
