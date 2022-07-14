 <!-- flat and -->
 <section class="tf-space flat-and">
          <div class="container">
            <div class="row">
              <div class="col-lg-6 col-md-5">
                <div class="and-heading">
                  <div class="tf-sub-title">کسب و کار ما را رشد دهیم</div>
                  <h2 class="tf-title">
                    فرکانس
                    <span class="text-color-3 style-title">[و]</span>
                    سوالات.
                  </h2>
                  <?php $group_question = myprefix_get_option('group_question'); $group_question = $group_question[0]; ?>
                  <div class="media">
                    <img src="<?= $group_question['image'] ?>" />
                  </div>
                </div>
              </div>
              <div class="col-lg-6 col-md-7">
                <p class="texts">
                </p>
                <div class="flat-accordion fl-faq-content">
                  <?php 
                    $group_question_item = myprefix_get_option('group_question_item');
                    foreach ($group_question_item as $value): ?>
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
                  <?php endforeach; ?>
                </div>
              </div>
            </div>
          </div>
        </section>