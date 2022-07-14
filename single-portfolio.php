<?php get_header() ?>
<?php while(have_posts()): the_post() ?>
<div class="flat-case-img">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 col-md-12">
        <div class="media">
          <img
            src="<?php the_post_thumbnail_url() ?>"
            alt="images"
          />
        </div>
      </div>
    </div>
  </div>
</div>

<div class="flat-case-details flat-skill">
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-12">
        <article class="post">
          <div class="inner-content grid-post">
            <div class="tags"><span>
              <?php
                $term_list = get_the_terms(get_the_ID(), 'portfolio_cat');
                $types ='';
                foreach($term_list as $term_single) {
                    $types .= ucfirst($term_single->name).', ';
                }
                $typesz = rtrim($types, ', ');
                echo $typesz;
              ?>
            </span></div>
            <h2 class="title"><?php the_title() ?><h2>
            <p class="text">
             <?php the_content() ?>
            </p>
            <div class="wrap-pogress">
              <?php 
                $lang = get_post_meta(get_the_ID(),'cmb_group_portfolio_language_item' ,true);
                if($lang):
                foreach($lang as $value):?>
                <div class="progress-box style-4">
                  <div class="progress-skill">
                    <div class="couter">
                      <div class="chart" data-percent="<?= $value['darsad'] ?>">
                        <span class="percent">۰</span>
                      </div>
                    </div>
                  </div>
                  <div class="content">
                    <h3><?= $value['lang'] ?></h3>
                  </div>
                </div>
              <?php endforeach; endif; ?>
            </div>
          </div>
        </article>
      </div>
      <div class="col-lg-4 col-md-12">
        <aside class="side-bar">
          <div class="inner-side-bar">
            <div class="widget-information">
              <ul>
                <li class="icon-client">
                  <div class="media img1">
                    <img
                      src="<?php bloginfo('template_directory') ?>/assets/images/icon/icon-case-1.png"
                      alt="images"
                    />
                  </div>
                  <div class="title-imformation title1">
                    <div class="title-icon">مشتری:</div>
                    <a class="text-icon">
                      <?= get_post_meta( get_the_ID(),'customer',true ) ?>
                    </a>
                  </div>
                </li>
                <li class="icon-loction">
                  <div class="media img2">
                    <img
                      src="<?php bloginfo('template_directory') ?>/assets/images/icon/icon-case-2.png"
                      alt="images"
                    />
                  </div>
                  <div class="title-imformation title2">
                    <div class="title-icon">موقعیت:</div>
                    <div class="text-icon"><?= get_post_meta( get_the_ID(),'location',true ) ?></div>
                  </div>
                </li>
                <li class="icon-loction">
                  <div class="media img3">
                    <img
                      src="<?php bloginfo('template_directory') ?>/assets/images/icon/icon-case-3.png"
                      alt="images"
                    />
                  </div>
                  <div class="title-imformation title3">
                    <div class="title-icon">دسته بندی:</div>
                    <div class="text-icon"><?= $typesz; ?></div>
                  </div>
                </li>
                <li class="icon-loction icon-style">
                  <div class="media img4">
                    <img
                      src="<?php bloginfo('template_directory') ?>/assets/images/icon/icon-case-4.png"
                      alt="images"
                    />
                  </div>
                  <div class="title-imformation title4">
                    <div class="title-icon">تاریخ:</div>
                    <div class="text-icon"><?= get_post_meta( get_the_ID(),'date',true ) ?></div>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </aside>
      </div>
    </div>
  </div>
  </div>
</div>

<section class="flat-work home2 home3 page-detail">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div
          class="work-heading wow fadeInDown"
          data-wow-delay="0ms"
          data-wow-duration="500ms"
        >
          <div class="tf-sub-title">مطالعه موردی ما</div>
          <h2 class="tf-title">
            <span class="text-color-3 style-title">[کارهای]</span> مشابه  
          </h2>
        </div>
      </div>

      <?php
        $terms = get_the_terms( $post->ID,'portfolio_cat');
        $term_ids = wp_list_pluck($terms,'term_id');
          $related = new WP_Query( array(
              'post_type' => 'portfolio',
              'tax_query' => array(
                            array(
                                'taxonomy' => 'portfolio_cat',
                                'field' => 'id',
                                'terms' => $term_ids,
                                'operator'=> 'IN'
                             )),
              'posts_per_page' => 3,
              'ignore_sticky_posts' => 1,
              'orderby' => 'rand',
              'post__not_in'=>array($post->ID)
           ) );
      ?>
      <?php while($related->have_posts()): $related->the_post(); ?>
        <div class="col-lg-4 col-md-4">
          <div class="work-slider">
            <div
              class="work-post style wow fadeInUp"
              data-wow-delay="0ms"
              data-wow-duration="500ms"
            >
              <div class="media">
                <img
                  src="<?php the_post_thumbnail_url() ?>"
                  alt="images"
                />
              </div>
              <div class="content">
                <div class="tags"><span><?= $typesz; ?></span></div>
                <h3 class="link-style-2">
                  <a href="case-study.html"><?php the_title() ?></a>
                </h3>
              </div>
            </div>
          </div>
        </div>
    <?php endwhile; ?>

    </div>
  </div>
</section>
<?php endwhile; ?>
<?php get_footer() ?>