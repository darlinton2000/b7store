<div class="categories-area">
    <div class="title">Categorias</div>
    <div class="buttons">
        <button class="cars">
            <img src="assets/icons/carIcon.png" alt="Ícone Carros" />
            Carros
        </button>
        <button class="eletronics">
            <img src="assets/icons/eletronicsIcon.png" alt="Ícone Eletrônicos" />
            Eletrônicos
        </button>
        <button class="clothes">
            <img src="assets/icons/clothesIcon.png" alt="Ícone Roupas" />
            Roupas
        </button>
        <button class="sports">
            <img src="assets/icons/sportsIcon.png" alt="Ícone Esportes" />
            Esportes
        </button>
        <button class="babies">
            <img src="assets/icons/babiesIcon.png" alt="Ícone Bebês" />
            Bebês
        </button>
    </div>
</div>

<div class="ads">
    <div class="ads-title">Anúncios recentes</div>
    <div class="ads-area">
        @if($advertisesList->count() > 0)
            @foreach ($advertisesList as $ad)
                <!-- Basic Ad -->
                <x-basic-ad :ad="$ad" />
                <!-- Basic Ad -->
            @endforeach
        @else
            <span>Não há anúncios recentes para exibir</span>
        @endif

    </div>
</div>
