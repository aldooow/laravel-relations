<ul>
  @foreach ($albums as $album)
    <li>
      Title Album: {{ $album->title }} <br>
      <a href="{{ route('albums.show', $album) }}">Details</a>
    </li>
  @endforeach
</ul>
