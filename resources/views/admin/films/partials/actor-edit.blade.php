@foreach ($filmActors as $filmActor)
    <?php
        $actorName = "";
    ?>
    <div class="form-group mb-3 actor" id="actor{{ $actorCount }}">
        @foreach ($actors as $actor)
            @if ($actor->id == $filmActor->actor_id)
                <input class="form-control" list="actor_names" name="actors[{{ $actorCount }}][actor_name]" value="{{ $actor->name }}">
            @endif
        @endforeach
        <datalist id="actor_names">
            @foreach ($actors as $actor)
                <option value="{{ $actor->name }}">
            @endforeach
        </datalist>
        <button type="button" class="btn btn-danger w-s" onclick="deleteActor({{ $actorCount }})">
            <img src="/pictures/icons/delete.png" width="15">
        </button>
    </div>
    <?php
        $actorCount++;
    ?>
@endforeach