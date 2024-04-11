<main>
    <div class="hero-area">
        <div class="search-area-adsList">
            <input
                class="search-text"
                type="text"
                placeholder="Estou procurando por..."
            />
            <div class="options-area">
                <div class="categories-area">
                    <p>Categoria</p>
                    <select class="categories-options">
                        <option selected hidden disabled value="">Todas</option>
                        <option value="cars">Carros</option>
                        <option value="eletronics">Eletrônicos</option>
                        <option value="clothes">Roupas</option>
                        <option value="sports">Esporte</option>
                        <option value="babies">Bebês</option>
                    </select>
                </div>
                <div class="states-area">
                    <p>Estados</p>
                    <select class="states">
                        <option selected hidden disabled value="">Todos</option>
                        <option value="PB">Paraíba</option>
                        <option value="PE">Pernambuco</option>
                        <option value="RJ">Rio de Janeiro</option>
                        <option value="RS">Rio Grande do Sul</option>
                        <option value="SP">São Paulo</option>
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
    </div>
</main>
