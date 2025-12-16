<div class="col-6 col-md-3 col-lg-2">
    <div class="card game-card h-100">
        <img
            src="{{ asset($game->image) }}"
            class="card-img-top"
            alt="{{ $game->name }}"
        >

        <div class="card-body text-center p-2">
            <h6 class="card-title mb-2">
                {{ $game->name }}
            </h6>

            <a href="{{ route('games.show', $game->id) }}"
               class="btn btn-sm btn-outline-warning w-100">
                Top Up
            </a>
        </div>
    </div>
</div>
