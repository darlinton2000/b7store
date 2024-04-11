<main>
    <div class="hero-area">
        <div class="search-area-adsList">
            <input
                wire:model.live.debounce.1000ms="textSearch"
                class="search-text"
                type="text"
                placeholder="Estou procurando por..."
            />
            <div class="options-area">
                <div class="categories-area">
                    <p>Categoria</p>
                    <select wire:model.live="categorySelected" class="categories-options">
                        <option selected hidden disabled value="">Todas</option>
                        @foreach($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="states-area">
                    <p>Estados</p>
                    <select wire:model.live="stateSelected" class="states">
                        <option selected hidden disabled value="">Todos</option>
                        @foreach($states as $state)
                            <option value="{{ $state->id }}">{{ $state->name }}</option>
                        @endforeach
                    </select>
                </div>
                <button class="search-mobile-button">Procurar</button>
            </div>
        </div>
    </div>

    <div class="ads">
        <div class="ads-title">Anúncios recentes</div>
        <div class="ads-area">
            @forelse($filteredAds as $ad)
                <div class="ad-item">
                    <div class="ad-image" style="background-image: url('{{ $ad->images[0]->url ?? 'https://placehold.it/150x150' }}')"></div>
                    <div class="ad-title">{{ $ad->title }}</div>
                    <div class="ad-price">R$ {{ $ad->price_formatted }}</div>
                </div>
            @empty
                <span>Não há anúncios recentes para exibir</span>
            @endforelse
        </div>

        <div>
            {{ $filteredAds->links() }}
        </div>
    </div>
</main>
