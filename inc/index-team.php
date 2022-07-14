
<!-- flat team -->
<section class="flat-team flat-blog-grid">
          <div class="container">
            <div class="row">
              <div class="col-lg-12">
                <div
                  class="team-heading wow fadeInDown"
                  data-wow-delay="0ms"
                  data-wow-duration="500ms"
                >
                  <div class="tf-sub-title">عضو کاری</div>
                  <h2 class="tf-title">
                    عضو های
                    <span class="text-color-3 style-title">[تیم ما]</span>
                  </h2>
                </div>
              </div>
              <?php 
                $group_team_item = myprefix_get_option('group_team_item');;
                foreach ($group_team_item as $value): ?>
                  <div class="col-lg-3 col-md-6">
                    <div
                      class="team-box grid-post wow fadeInUp"
                      data-wow-delay="0ms"
                      data-wow-duration="1500ms"
                    >
                      <div class="media">
                        <img
                          src="<?= $value['image'] ?>"
                          alt="images"
                        />
                      </div>
                      <div class="content">
                        <div class="sub-title-content"><?= $value['takhasos'] ?></div>
                        <h3><a><?= $value['name'] ?></a></h3>
                      </div>
                    </div>
                  </div>
              <?php endforeach; ?>
            </div>
          </div>
        </section>