<?php
    $carousel_images = get_field('carousel_images');
?>
<section id="container">

  <div class="swiper carousel-fade">

    <div class="swiper-wrapper">
    <?php if($carousel_images) { 

        foreach($carousel_images as $ci) { ?>
            <div class="swiper-slide pad">
                <div class="single-slide">
                    <img src="<?php echo $ci['image'];?>">
                </div>  
            </div>
        <?php }   

    } ?>
    </div>

  </div>
</section>
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<script>

let swiper = new Swiper('.carousel-fade', {
  // Optional parameters
  effect: "fade",
  loop: true,
  autoplay: {
    delay: 1500
  },

});

</script>