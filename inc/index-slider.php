<!-- slider -->
<?php 
  $optionSlider = array('post_type'=>'slider','post_per_page'=>6);
  $slider = new WP_Query($optionSlider);
  if($slider):
?>
<section class="slider">
    <div class="elip-header">
      <img src="<?php bloginfo('template_directory') ?>/assets/images/mark-page/ab-header.png" alt="img" />
    </div>
    <div class="swiper-container mainslider">
      <div class="swiper-wrapper">
        <?php while($slider->have_posts()): $slider->the_post(); ?>
          <div class="swiper-slide">
            <div class="flat-slider">
              <div class="overlay-slider"></div>
              <div class="sld-img">
                <img
                  src="<?php the_post_thumbnail_url() ?>"
                  alt="img"
                />
              </div>
              <div class="elip-slider">
                <img
                  src="<?php bloginfo('template_directory') ?>/assets/images/image-slider/elip-slider.png"
                  alt="img"
                />
              </div>
              <div class="elip-header3">
                <img
                  src="<?php bloginfo('template_directory') ?>/assets/images/image-slider/elipse-3.png"
                  alt="img"
                />
              </div>
              <div class="content">
                <div class="heading">
                  <h1>
                    <?php the_title() ?>
                  </h1>
                  <p>
                    <?php the_content() ?>
                  </p>
                </div>

                <div class="button-slider">
                  <a href="http://localhost/wpComapnyBixo/%d8%aa%d9%85%d8%a7%d8%b3-%d8%a8%d8%a7-%d9%85%d8%a7/" class="button btn-1"
                    ><span> در تماس باشید </span></a
                  >
                  <div class="video-slider">
                    <a
                      href="<?= get_post_meta(get_the_ID(),'slider-video',true) ?>"
                      class="lightbox-image"
                    >
                      <i class="ripple"></i>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        <?php endwhile; ?>
      </div>
    </div>
    <div class="button-custom-slider">
      <div class="swiper-button-next button-slide-custom-next"></div>
      <div class="swiper-button-prev button-slide-custom-prev"></div>
    </div>
</section>
<?php endif; wp_reset_postdata(); ?>