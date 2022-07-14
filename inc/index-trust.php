<!-- flat trusted -->
<section class="tf-space flat-trusted">
          <div class="container">
            <div class="row">
              <div class="col-lg-6 col-md-5">
                <?php $group_specialty = myprefix_get_option('group_specialty'); $group_specialty = $group_specialty[0] ?>
                <div class="media img-1">
                  <img
                    src="<?= $group_specialty['image'] ?>"
                    alt="images"
                  />
                  <div class="mark-page tf-mark animate-up">
                    <img
                      src="<?php bloginfo('template_directory') ?>/assets/images/mark-page/mark-trusted-1.png"
                      alt="images"
                    />
                  </div>
                  <div class="mark-page2 tf-mark animate-up">
                    <img
                      src="<?php bloginfo('template_directory') ?>/assets/images/mark-page/mark-trusted-2.png"
                      alt="images"
                    />
                  </div>
                  <div class="mark-page3 tf-mark animate-up">
                    <img
                      src="<?php bloginfo('template_directory') ?>/assets/images/mark-page/mark-trusted-3.png"
                      alt="images"
                    />
                  </div>
                  <div class="mark-page4 tf-mark animate-up">
                    <img
                      src="<?php bloginfo('template_directory') ?>/assets/images/mark-page/mark-trusted-3.png"
                      alt="images"
                    />
                  </div>
                  <div class="mark-page5 tf-mark animate-up">
                    <img
                      src="<?php bloginfo('template_directory') ?>/assets/images/mark-page/mark-trusted-4.png"
                      alt="images"
                    />
                  </div>
                  <div class="mark-page6 tf-mark animate-up">
                    <img
                      src="<?php bloginfo('template_directory') ?>/assets/images/mark-page/mark-trusted-3.png"
                      alt="images"
                    />
                  </div>
                </div>
                <div class="media img-2">
                  <img
                    src="<?php bloginfo('template_directory') ?>/assets/images/image-box/trusted-2.jpg"
                    alt="images"
                  />
                  <div
                    class="trusted-years wow fadeInUp"
                    data-wow-delay="0ms"
                    data-wow-duration="1500ms"
                  >
                    <h5><?= $group_specialty['tajrobe'] ?><br />تجربه</h5>
                  </div>
                </div>
              </div>
              <div class="col-lg-6 col-md-7">
                <div class="trusted-heading">
                  <div class="tf-sub-title">لطفا با ما آشنا شوید</div>
                  <h2 class="tf-title">
                    <span class="text-color-3 style-title">[مورد اعتماد]</span>
                    و اولین و بهترین در ایران
                  </h2>
                </div>
                <h3 class="text-color-3">
                  <?= $group_specialty['desc'] ?>
                </h3>
                <?php 
                  $group_specialty_item = myprefix_get_option('group_specialty_item');
                  foreach($group_specialty_item as $value):
                ?>
                  <div class="content-progress-box">
                    <div class="progress-bar" data-percentage="<?= $value['tajrobe_darsad']; ?>">
                      <h4 class="progress-title-holder">
                        <span class="progress-title"><?= $value['tajrobe_name']; ?></span>
                        <span class="progress-number-wrapper">
                          <span class="progress-number-mark">
                            <span class="percent"></span>
                          </span>
                        </span>
                      </h4>
                      <div class="progress-content-outter">
                        <div class="progress-content"></div>
                      </div>
                    </div>
                  </div>
                <?php endforeach; ?>
              </div>
            </div>
          </div>
        </section>