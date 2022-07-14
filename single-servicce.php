<?php get_header() ?>
        <!-- #site-header-wrap -->
        <div
          class="tf-space flat-blog-details flat-service-details flat-journey flat-and"
        >
          <div class="container">
            <div class="row">
              <div class="col-lg-8 col-md-12">
                <?php while(have_posts()): the_post(); ?>
                  <article class="post">
                    <div class="inner-content grid-post">
                      <div class="media img-01">
                        <img
                          src="<?php the_post_thumbnail_url() ?>"
                          alt="images"
                        />
                      </div>

                      <h2 class="title"><?php the_title() ?></h2>
                      <p class="text">
                        <?php the_content(); ?>
                      </p>

                      <div class="box">
                        <div class="media img-02">
                          <img
                            src="<?= get_post_meta(get_the_ID(),'service_image',true) ?>"
                            alt="images"
                          />
                        </div>
                        <?php 
                            $attribute_service = get_post_meta(get_the_ID(),'attribute_service',true);
                            if($attribute_service) : ?>
                        <ul class="service-tag tag1">
                            <?php foreach ($attribute_service as $value) : ?>
                              <li><a><?= $value ?></a></li>
                        <?php endforeach; endif; ?>
                        </ul>
                      </div>
                      <div class="flat-accordion fl-faq-content">
                        <?php
                          $service_question = get_post_meta(get_the_ID(),'cmb_group_service_question_item',true);
                          if($service_question):
                          foreach ($service_question as $value) :?>
                            <div class="flat-toggle">
                              <h5 class="toggle-title active">
                                <?= $value['question'] ?>
                                <span class="btn-toggle"></span>
                              </h5>
                              <div class="toggle-content section-desc">
                                <p>
                                <?= $value['ask'] ?>
                                </p>
                              </div>
                            </div>
                          <?php endforeach; endif; ?>
                      </div>
                    </div>
                  </article>
                <?php endwhile; ?>
              </div>
              <div class="col-lg-4 col-md-12">
                <aside class="side-bar">
                  <div class="inner-side-bar">
                    <div class="widget widget-categories">
                      <div class="widget-title item">
                        <h3>لیست خدمات</h3>
                      </div>
                      <?php $attribute_service = get_post_meta(get_the_ID(),'attribute_service',true);
                      if($attribute_service):
                       ?>
                      <ul>
                      <?php foreach ($attribute_service as $value) : ?>
                        <li><a><?= $value ?></a></li>
                        <?php endforeach; endif; ?>
                      </ul>
                    </div>
                  </div>
                </aside>
              </div>
            </div>
          </div>
        </div>
        <?php get_footer() ?>