<section class="hero-area">
    <h3 class="subtitle">Aqui você encontra o que tanto procura!</h3>
    <h1 class="title">O que você está procurando?</h1>
    <div>
        <form class="search-area" method="GET" action="{{ route('ad.list') }}">
            <input class="search-text" name="s" type="text" placeholder="Estou procurando por..." />

            <select class="categories-options" name="c">
                <option selected hidden disabled value="">Categoria</option>
                @foreach ($categories as $category)
                    <option value="{{ $category['value'] }}">{{ $category['name'] }}</option>
                @endforeach
            </select>

            <select class="states" name="st">
                <option selected hidden disabled value="">Estado</option>
                @foreach ($states as $state)
                    <option value="{{ $state['value'] }}">{{ $state['name'] }}</option>
                @endforeach
            </select>

            <button type="submit" class="search-button">Procurar</button>
        </form>
    </div>
</section>
