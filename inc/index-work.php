<?php 
  $optionPortfolio = array(
    'post_type'=>'portfolio',
    'post_per_page'=>10,
  );
  $portfolio = new WP_Query($optionPortfolio);
  if($portfolio->have_posts()):
?>
<!-- flat work -->
<section class="flat-work tf-work">
  <div class="container-fuild">
    <div class="row">
      <div class="col-lg-12">
        <div
          class="work-heading wow fadeInDown"
          data-wow-delay="0ms"
          data-wow-duration="500ms"
        >
          <div class="tf-sub-title">مطالعه موردی ما</div>
          <h2 class="tf-title">
            <span class="text-color-3 style-title">[نمونه کار های]</span>
            اخیر ما
          </h2>
        </div>
      </div>
      <div class="col-lg-12">
        <div class="swiper-container work-slider carousel-2">
          <div class="swiper-wrapper">
            <?php while($portfolio->have_posts()): $portfolio->the_post() ?>
              <div class="swiper-slide work-post wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms" >
                <div class="media">
                  <img
                    src="<?php the_post_thumbnail_url() ?>"
                    alt="images"
                  />
                </div>
                <div class="content">
                    <div class="tags">
                    <span>
                      <?php
                        $term_list = get_the_terms($portfolio->ID, 'portfolio_cat');
                        $types ='';
                        foreach($term_list as $term_single) {
                             $types .= ucfirst($term_single->name).', ';
                        }
                        $typesz = rtrim($types, ', ');
                        echo $typesz;
                      ?>
                    </span>
                  </div>
                  <h3>
                    <a href="<?php the_permalink() ?>"><?= the_title() ?></a>
                  </h3>
                </div>
              </div>
              <?php endwhile; ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<?php endif; wp_reset_postdata(); ?>