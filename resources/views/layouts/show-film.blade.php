<div class="col">
    <p class="display-3 text-warning">Título:</p>
    <p class="display-3">{{ $film->title }}</p>
    <br>
    <p class="display-6 text-warning">Título original:</p>
    <p class="display-6">{{ $film->original }}</p>
    <br>
    <p class="display-6"><span class="text-warning">Duración: </span>{{ $film->duration }} minutos</p>
    <br>
    <p class="display-6"><span class="text-warning">Año: </span>{{ $film->year }}</p>
    <br>
    <p class="display-6"><span class="text-warning">Director: </span>{{ $film->director->name }}</p>
    <br>
    <p class="h4"><span class="text-warning">Actores: </span>
        <?php
            $i = 0;
        ?>
        @foreach ($film->actors as $actor)
            @if ($i == 0)
                {{$actor->name}}
            @else
                , {{$actor->name}}
            @endif
            <?php
                $i++;
            ?>
        @endforeach
        @if ($i == 0)
            -
        @endif
    </p>
    <p class="h4"><span class="text-warning">Géneros: </span>
        <?php
            $i = 0;
        ?>
        @foreach ($film->genres as $genre)
            @if ($i == 0)
                {{$genre->name}}
            @else
                , {{$genre->name}}
            @endif
            <?php
                $i++;
            ?>
        @endforeach
        @if ($i == 0)
            -
        @endif
    </p>
    <p class="h4"><span class="text-warning">¿Dónde ver? </span>
        <?php
            $i = 0;
        ?>
        @foreach ($film->platforms as $platform)
            @if ($i == 0)
                {{$platform->name}}
            @else
                , {{$platform->name}}
            @endif
            <?php
                $i++;
            ?>
        @endforeach
        @if ($i == 0)
            -
        @endif
    </p>
</div>
<div class="col-6 col-xl-5">
    <img src="{{ $film->picture }}" class="w-auto">
</div>