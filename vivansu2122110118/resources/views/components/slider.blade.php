<!-- resources/views/components/slider.blade.php -->
<div class="swiper-container">
    <div class="swiper-wrapper">
        @foreach ($list_banner as $banner)
            <div class="swiper-slide">
                <img src="{{ asset($banner->image_path) }}" alt="banner">
            </div>
        @endforeach
    </div>
    <!-- Add Pagination -->
    <div class="swiper-pagination"></div>
    <!-- Add Navigation -->
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        var swiper = new Swiper('.swiper-container', {
            loop: true,
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
        });
    });
</script>
