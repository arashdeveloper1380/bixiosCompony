<?php get_header() ?>
<?php while(have_posts()): the_post() ?>
  <div class="tf-space flat-blog-details">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-12">
            <article class="post">
              <div class="inner-content grid-post">
                <div class="media img-1">
                  <img
                    src="<?php the_post_thumbnail_url() ?>"
                    alt="images"
                  />
                  <div class="tags"><?php the_date('d/m/Y') ?></div>
                </div>
                <div class="meta link-style-3 content font">
                  <a class="entry-author" href="team.html"><?php the_author() ?></a>
                  <a class="entry-comment" href="blog.html"><?php comments_popup_link('بدون دیدگاه','1 دیدگاه','% دیدگاه'); ?></a>
                </div>
                <h2 class="title">
                  <?php the_title() ?>
                </h2>
                <p class="text">
                  <?php the_content() ?>
                </p>
                <div class="infor-row">
                  <div class="tags">
                    <h5 class="">تگ ها</h5>
                    <div>
                      <?php the_tags($before = '', $sep = '') ?>
                    </div>
                  </div>
                </div>
              </div>
              <div id="comments">
                <h2 class="title-comment">
                  <?php comments_popup_link(' 0 ',' 1 ',' % '); ?><span class="text-color-3"> [نظرات] </span><br><br>
                </h2>
                <div id="respond" class="respond-comment">
                  <p class="text"></p>
                  <?php comments_template() ?>
                </div>
              </div>
            </article>
          </div>
          <?php get_template_part('inc/sidebarsingle','widget') ?>
        </div>
      </div>
  </div>
<?php endwhile; ?>
<?php get_footer() ?>