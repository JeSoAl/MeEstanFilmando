@foreach ($filmGenres as $filmGenre)
    <div class="form-group mb-3 genre" id="genre{{ $genreCount }}">
        <select class="form-control" name="genres[{{ $genreCount }}][genre_id]">
            @foreach ($genres as $genre)
                @if ($genre->id == $filmGenre->genre_id)
                    <option value="{{ $genre->id }}" selected>{{ $genre->name }}</option>
                @else
                    <option value="{{ $genre->id }}">{{ $genre->name }}</option>
                @endif
            @endforeach
        </select>
        <button type="button" class="btn btn-danger w-s" onclick="deleteGenre({{ $genreCount }})">
            <img src="/pictures/icons/delete.png" width="15">
        </button>
    </div>
    <?php
        $genreCount++;
    ?>
@endforeach