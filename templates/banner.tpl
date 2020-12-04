{if $banner}
<div class="device">
    <div class="swiper-container index-banner">
        <div class="swiper-wrapper">
            {foreach $banner as $b }
                <div class="swiper-slide" style="background: url({$b['imageurl']}); background-size: cover; background-repeat: no-repeat; background-color: rgba(67, 67, 67, 0); background-position: 50% 50%;">
                </div>
            {/foreach}
        </div>
    </div>
</div>

<link rel="stylesheet" href="public/css/swiper.min.css">
<script src="public/js/swiper.min.js"></script>

<script>
    var swiper = new Swiper('.swiper-container', {
//        lazy: true,
//        autoHeight: true,
        spaceBetween: 30,
        centeredSlides: true,
        autoplay: {
            delay: 5000,
            disableOnInteraction: false,
        },
//        pagination: {
//            el: '.swiper-pagination',
//            clickable: true,
//        },
//        navigation: {
//            nextEl: '.swiper-button-next',
//            prevEl: '.swiper-button-prev',
//        },
    });

</script>
{/if}