<!-- flat testimonial -->
<section class="tf-space flat-testimonial falt-client">
  <div class="container">
    <div class="row">
      <div class="col-lg-7">
        <div
          class="swiper-container testimonial-slider tf-style carousel-5"
        >
          <div class="swiper-wrapper">
            <?php 
              $group_comments = myprefix_get_option('group_comments'); 
              foreach ($group_comments as $value) :?>
            <div class="swiper-slide testimonial-post">
              <div class="content">
                <h3><?= $value['name'] ?></h3>
                <div class="tf-texts">
                  <span class="text">
                    <?= $value['comment'] ?>
                  </span>
                  <span class="media-1">
                    <img
                      src="<?php bloginfo('template_directory') ?>/assets/images/icon/testi-2.png"
                      alt="images"
                    />
                  </span>
                  <span class="media-2">
                    <img
                      src="<?php bloginfo('template_directory') ?>/assets/images/icon/testi-1.png"
                      alt="images"
                    />
                  </span>
                </div>
              </div>
            </div>
            <?php endforeach; ?>
          </div>
        </div>
        <div class="swiper-pagination-testi"></div>
      </div>
    </div>
  </div>
</section>