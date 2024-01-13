<div class="my-ad-item">
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
            style="background-image: url('{{ $ad->images->where('featured', 1)->first()->url }}')"
        ></div>
    </div>
    <div class="ad-title">{{ $ad->title }}</div>
    <div class="ad-price">R$ {{ number_format($ad->price, 2, ',', '.') }}</div>
</div>
