@foreach ($filmPlatforms as $filmPlatform)
    <div class="form-group mb-3 platform" id="platform{{ $platformCount }}">
        <select class="form-control" name="platforms[{{ $platformCount }}][platform_id]" value="{{ old(platforms[{{ $platformCount }}][platform_id]) ?? $filmPlatform->platform_id }}">
            @foreach ($platforms as $platform)
                <option value="{{ $platform->id }}">{{ $platform->name }}</option>
            @endforeach
        </select>
        <button type="button" class="btn btn-danger w-s" onclick="deleteplatform({{ $platformCount }})">
            <i class="fa fa-minus" aria-hidden="true"></i>
        </button>
    </div>
    <?php
        $platformCount++;
    ?>
@endforeach