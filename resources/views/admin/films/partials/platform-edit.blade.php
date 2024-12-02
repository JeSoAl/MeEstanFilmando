@foreach ($filmPlatforms as $filmPlatform)
    <div class="form-group mb-3 platform" id="platform{{ $platformCount }}">
        <select class="form-control" name="platforms[{{ $platformCount }}][platform_id]">
            @foreach ($platforms as $platform)
                @if ($platform->id == $filmPlatform->platform_id)
                    <option value="{{ $platform->id }}" selected>{{ $platform->name }}</option>
                @else
                    <option value="{{ $platform->id }}">{{ $platform->name }}</option>
                @endif
            @endforeach
        </select>
        <button type="button" class="btn btn-danger w-s" onclick="deletePlatform({{ $platformCount }})">
            <img src="/pictures/icons/delete.png" width="15">
        </button>
    </div>
    <?php
        $platformCount++;
    ?>
@endforeach