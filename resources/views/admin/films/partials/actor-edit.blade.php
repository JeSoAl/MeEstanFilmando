@foreach ($filmActors as $filmActor)
    <?php
        $actorName = "";
    ?>
    @foreach ($actors as $actor)
        @if ($actor->id == $filmActor->actor_id)
            $actorName = $actor->name;
        @endif
    @endforeach
    <div class="form-group mb-3 actor" id="actor{{ $actorCount }}">
        <input class="form-control" list="actor_names" name="actors[{{ $actorCount }}][actor_name]" value="{{ old(actors[{{ $actorCount }}][actor_name]) ?? $actorName }}">
        <datalist id="actor_names">
            @foreach ($actors as $actor)
                <option value="{{ $actor->name }}">
            @endforeach
        </datalist>
        <button type="button" class="btn btn-danger w-s" onclick="deleteActor({{ $actorCount }})">
            <i class="fa fa-minus" aria-hidden="true"></i>
        </button>
    </div>
    <?php
        $actorCount++;
    ?>
@endforeach