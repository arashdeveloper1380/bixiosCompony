        <!-- Footer -->
        <footer id="footer" class="clearfix">
          <div id="footer-widgets" class="container">
            <div class="row">
              <div class="col-lg-5 col-md-8">
                <div class="widget">
                  <div class="logo-footer">
                  <?php $group_header = myprefix_get_option('group_header'); $group_header = $group_header[0];  ?>
                    <a href="index.html" rel="home" class="main-logo">
                      <img
                        src="<?= $group_header['logo'] ?>"
                        alt="images"
                      />
                    </a>
                  </div>
                  <h5 class="text-color-4">
                    اعضا نمی خواهند، در بالشتک برای غرامت در برای رسیدن به
                    موفقیت زندگی کنید.
                  </h5>
                  <h4 class="text-color-1">
                    اشتراک در
                    <span class="text-color-3"> Bixos </span> آژانس دیجیتال ما
                  </h4>
                  <div class="widget-form">
                    <form
                      action="#"
                      id="subscribe-form"
                      class="form-subscribe-footer"
                    >
                      <div id="subscribe-content" class="footer_input-footer">
                        <input
                          type="Email"
                          id="subscribe-email"
                          class="tb-my-input letter-spacing"
                          placeholder="خبرنامه خود را وارد کنید..."
                          required
                        />
                        <button
                          type="submit"
                          id="subscribe-button"
                          class="button"
                        >
                          برو
                        </button>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-7">
                <div class="footer-widgets-nav-menu">
                  <div class="menu-1">
                    <h3 class="widget-title-link-wrap text-color-1">
                      پیوندها را کاوش کنید
                    </h3>
                    <ul class="link-wrap">
                      <?php dynamic_sidebar('widget_footer') ?>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 col-md-5">
                <div class="menu-2">
                  <h3 class="widget-title-link-wrap text-color-1">
                    تماس با ما
                  </h3>
                  <?php $group_footer = myprefix_get_option('group_footer'); $group_footer = $group_footer[0]; ?>
                  <ul class="widget-list-contact">
                    <li class="meta-address text-color-4"><?= $group_footer['address'] ?></li>
                    <li class="contact-style link-style-4">
                      <a href="mailto:<?= $group_footer['email'] ?>" class="meta-mail"
                        ><?= $group_footer['email'] ?></a
                      >
                    </li>
                    <li class="contact-style link-style-4">
                      <a href="tel:" class="meta-phone"><?= $group_header['mobile'] ?></a>
                    </li>
                    <li>
                    <?php 
                      $group_social = myprefix_get_option('group_social'); 
                      foreach ($group_social as $value) :?>
                        <a href="<?= $value['link'] ?>"><i class="fab fa-<?= $value['icon'] ?>"></i></a>
                      <?php endforeach; ?>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </footer>
        <!-- /#footer -->
        <!-- Bottom -->

        <div class="widget-social-footer">
          <div class="container">
            <div>
              <h3>
                کپی رایت توسط
                <a href="https://arash-narimani.ir" class="text-color-3"
                  >آرش نریمانی</a
                >.کلیه حقوق محفوظ است.
              </h3>
            </div>
          </div>
        </div>
      </div>
      <!-- /#page -->
    </div>
    <a id="scroll-top"></a>
    <?php wp_footer() ?>
  </body>
</html>
