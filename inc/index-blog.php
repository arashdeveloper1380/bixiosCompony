<?php 
  $optionPost = array('post_type'=>'post','post_per_page'=>3);
  $blog = new WP_Query($optionPost);
  if($blog->have_posts()):
?>
<section class="flat-blog-grid style-blog">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div
          class="blog-heading wow fadeInDown"
          data-wow-delay="0ms"
          data-wow-duration="500ms"
        >
          <div class="tf-sub-title">اخبار و وبلاگ ها</div>
          <h2 class="tf-title">
            آخرین
            <span class="text-color-3 style-title">[اخبار]</span> و
            مقالات
          </h2>
        </div>
      </div>
      <?php while($blog->have_posts()): $blog->the_post(); ?>
        <div class="col-lg-4 col-md-4">
          <div class="grid-post">
            <div class="media">
              <img
                src="<?php the_post_thumbnail_url() ?>"
                alt="images"
              />
              <div class="tags"><?php the_date('d/m/Y') ?></div>
            </div>
            <div class="content">
              <div class="meta link-style-3 font">
                <a class="entry-author" href="team.html"><?php the_author() ?></a>
              </div>
              <h3 class="title-item">
                <a href="<?php the_permalink() ?>">
                  <?php the_title() ?>
                </a>
              </h3>
              <div class="read-more link-style-5">
                <a href="<?php the_permalink() ?>" class="readmore">ادامه مطلب</a>
              </div>
            </div>
          </div>
        </div>
      <?php endwhile; ?>
    </div>
    <div class="blog-button">
      <a href="<?= get_post_type_archive_link('post') ?>" class="button btn-style2 btn-1"><span> مشاهده همه وبلاگ ها </span></a>
    </div>
  </div>
</section>
<?php endif; wp_reset_postdata(); ?>