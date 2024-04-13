<style>
    .my-ad-item {
        position: relative;
    }
    .pill {
        padding: 5px 10px;
        background-color: teal;
        color: white;
        border-radius: 5px;
    }
    .my-ad-pill {
        position: absolute;
        top: 5px;
        right: 5px;
        font-size: 10px;
    }
</style>

<a href="{{ route('ad.show', $ad->slug) }}" class="my-ad-item" style="text-decoration: none">
    @if(empty($canEdit) && Auth::user() && $ad->user_id === Auth::user()->id)
        <span class="pill my-ad-pill">Meu Anúncio</span>
    @endif
    <div class="ad-image-area">
        @if(!empty($canEdit))
            <div class="ad-buttons">
                <a href="{{ route('ad.delete', ['id' => $ad->id]) }}" class="ad-button">
                    <img src="/assets/icons/deleteIcon.png" />
                </a>
                <div class="ad-button">
                    <img src="/assets/icons/editIcon.png" />
                </div>
            </div>
        @endif
        <div
            class="ad-image"
            style="background-image: url('{{ $ad->images->where('featured', 1)->first()->url ?? 'https://via.placeholder.com/400x300.png?text=Sem+imagem' }}')"
        ></div>
    </div>
    <div class="ad-title">{{ $ad->title }}</div>
    <div class="ad-price">R$ {{ $ad->price_formatted }}</div>
</a>
