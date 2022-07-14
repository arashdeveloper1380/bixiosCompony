<?php 
  $serviceOption = array('post_type'=>'servicce','post_per_page'=>6);
  $service = new WP_Query($serviceOption);
  if($service):
?>
<!-- flat service -->
<section class="tf-space flat-service">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div
          class="service-heading wow fadeInDown"
          data-wow-delay="0ms"
          data-wow-duration="1500ms"
        >
          <div class="tf-sub-title">لیست خدمات ما</div>
          <h2 class="tf-title">
            <span class="text-color-3 style-title">[خدماتی]</span>
            که ما ارائه می دهیم
          </h2>
        </div>
      </div>
      <div class="col-lg-12">
        <div class="swiper-container service-slider carousel-4">
          <div class="swiper-wrapper">
            <?php while($service->have_posts()): $service->the_post(); ?>
              <div class="swiper-slide service-post style-post wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                <div class="media">
                  <img
                    src="<?= get_post_meta(get_the_ID(),'service_image_home', true) ?>"
                    alt="images"
                  />
                </div>
                <div class="content">
                  <h3>
                    <a href="<?php the_permalink() ?>"><?php the_title() ?></a>
                  </h3>
                  <p>
                    <?php the_excerpt() ?>
                  </p>
                  <div class="read-more">
                    <a href="<?php the_permalink() ?>" class="readmore"></a>
                  </div>
                </div>
              </div>
              <?php endwhile; ?>
          </div>
          <div class="swiper-pagination"></div>
        </div>
      </div>
    </div>
  </div>
</section>
        <?php endif; wp_reset_postdata() ?>