<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;700&family=Open+Sans:ital@0;1&family=Oswald:wght@400;700&display=swap"
        rel="stylesheet"
    />
    <link rel="stylesheet" href="/assets/style.css" />
    <link rel="stylesheet" href="/assets/adPageStyle.css" />
    <link rel="stylesheet" href="/assets/myAdsStyle.css" />
    <title>B7Store</title>

    <script>
        function callme(number, title) {
            let message = `Olá, vi seu anúncio "${title}" no B7Store e gostaria de mais informações`;

            window.open(`https://wa.me/55${number}?text=${message}`, '_blank');
        }
    </script>
</head>

<body>
<!-- Header -->
<x-base.header />
<!-- Header -->

<main>
    <div class="ad-area">

        <!-- Livewire Gallery -->
        <livewire:gallery :images="$ad->images" />
        <!-- Livewire Gallery -->

        <div class="ad-area-right">
            <div class="categories-state">{{ $ad->state->name }} / {{ $ad->category->name }}</div>
            <div class="ad-page-title">{{ $ad->title }}</div>
            <div class="ad-page-date">Publicado em {{ date('d/m/Y', strtotime($ad->created_at)) }} às {{ date('H:i', strtotime($ad->created_at)) }}</div>
            <div class="ad-page-price">R$ {{ $ad->price_formatted }}</div>

            @if($ad->negotiable)
                <div class="contact">
                    <img src="/assets/icons/wppIcon.png" />
                    <div class="contact-text">Negociável</div>
                </div>
                <div class="negociable">*Esse valor poderá ser negociado.</div>
            @endif

            <div class="ad-page-text">
                {{ $ad->description }}
            </div>
            <button onclick="callme('{{ $ad->contact }}', '{{ $ad->title }}')" class="get-touch">Entrar em contato</button>
            <div class="views">
                <img src="/assets/icons/eyeGrayIcon.png" />
                <div class="views-text">{{ $ad->views }} visualizações neste anúncio</div>
            </div>
        </div>
    </div>
    <div class="ads">
        <div class="ads-title">Anúncios relacionados</div>
        <div class="ads-area">
            @forelse($relatedAds as $ad)
                <!-- Basic Ad -->
                <x-basic-ad :ad="$ad" />
                <!-- Basic Ad -->
            @empty
                <span>Não há anúncios relacionados para exibir</span>
            @endforelse
        </div>
    </div>
</main>

<!-- Footer -->
<x-base.footer />
<!-- Footer -->
</body>
</html>
