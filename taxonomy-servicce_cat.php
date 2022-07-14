<?php get_header() ?>
<section class="tf-space flat-service home2 home3">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="swiper-container service-slider carousel-4">
          <div class="swiper-wrapper">
            <?php while(have_posts()): the_post() ?>
              <div class="swiper-slide service-post post wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms" >
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
                  <div class="tf-progress"></div>
                  <ul>
                    <?php $attribute_service = get_post_meta(get_the_ID(),'attribute_service',true); 
                    if($attribute_service):
                    ?>
                    <?php foreach ($attribute_service as $value) : ?>
                      <li><a><?= $value ?></a></li>
                    <?php endforeach; endif; ?>
                  </ul>
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

<?php get_template_part('inc/index','count') ?><br><br><br>
<?php get_template_part('inc/index','team') ?>
<?php get_template_part('inc/index','question') ?>
<?php get_template_part('inc/index','comment') ?>
<?php get_footer() ?>