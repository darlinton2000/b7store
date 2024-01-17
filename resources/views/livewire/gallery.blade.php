<div class="ad-area-left">
    <div class="main-photo" style="background-image: url('{{ $featuredUrl }}')"></div>
    <div class="secundary-photos">
        @foreach($images as $image)
            <div wire:click="setFeatured('{{ $image->url }}')" class="secundary-image" style="background-image: url('{{ $image->url }}')"></div>
        @endforeach
    </div>
</div>
