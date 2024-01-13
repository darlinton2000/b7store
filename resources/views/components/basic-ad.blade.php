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

<div class="my-ad-item">
    @if(empty($canEdit) && $ad->user_id === Auth::user()->id)
        <span class="pill my-ad-pill">Meu Anúncio</span>
    @endif
    <div class="ad-image-area">
        @if(!empty($canEdit))
            <div class="ad-buttons">
                <div class="ad-button">
                    <img src="/assets/icons/deleteIcon.png" />
                </div>
                <div class="ad-button">
                    <img src="/assets/icons/editIcon.png" />
                </div>
            </div>
        @endif
        <div
            class="ad-image"
            style="background-image: url('{{ $ad->images->where('featured', 1)->first()->url ?? 'https://placehold.it/300x300' }}')"
        ></div>
    </div>
    <div class="ad-title">{{ $ad->title }}</div>
    <div class="ad-price">R$ {{ number_format($ad->price, 2, ',', '.') }}</div>
</div>
