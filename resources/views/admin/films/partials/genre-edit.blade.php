@foreach ($filmGenres as $filmGenre)
    <div class="form-group mb-3 genre" id="genre{{ $genreCount }}">
        <select class="form-control" name="genres[{{ $genreCount }}][genre_id]" value="{{ old(genres[{{ $genreCount }}][genre_id]) ?? $filmGenre->genre_id }}">
            @foreach ($genres as $genre)
                <option value="{{ $genre->id }}">{{ $genre->name }}</option>
            @endforeach
        </select>
        <button type="button" class="btn btn-danger w-s" onclick="deleteGenre({{ $genreCount }})">
            <i class="fa fa-minus" aria-hidden="true"></i>
        </button>
    </div>
    <?php
        $genreCount++;
    ?>
@endforeach