<div class="card game-card h-100 shadow-sm"
     style="border: none; background: #1a1a2e; color: white;">

    <div style="height: 280px; overflow: hidden; border-radius: 8px 8px 0 0;">
        <img 
            src="{{ asset($game->image) }}" 
            class="card-img-top" 
            alt="{{ $game->name }}"
            style="width: 100%; height: 100%; object-fit: cover; object-position: center;"
        >
    </div>

    <div class="card-body text-center p-2 d-flex flex-column justify-content-between">
        <h6 class="card-title mb-2" style="font-size: 0.9rem; font-weight: bold;">
            {{ $game->name }}
        </h6>

        <a href="{{ route('games.show', $game->id) }}" 
           class="btn btn-sm btn-primary w-100">
            Lihat Produk
        </a>
    </div>
</div>
