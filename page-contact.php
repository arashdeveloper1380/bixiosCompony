<?php /* Template Name: contact */ ?>
<?php get_header() ?>
<section class="flat-title-page">
    <div class="overlay-page"></div>
    <div class="elip-header">
    <img src="<?php bloginfo('template_directory') ?>/assets/images/mark-page/ab-header.png" alt="img" />
    </div>
    <div class="elip-header1">
    <img src="<?php bloginfo('template_directory') ?>/assets/images/mark-page/ellipse1.png" alt="img" />
    </div>
    <div class="elip-header2">
    <img src="<?php bloginfo('template_directory') ?>/assets/images/mark-page/Ellipse2.png" alt="img" />
    </div>
    <div class="elip-header3">
    <img src="<?php bloginfo('template_directory') ?>/assets/images/mark-page/mark-page.png" alt="img" />
    </div>
    <div class="container">
    <div class="row">
        <div class="col-lg-12 col-md-12">
        <div class="breadcrumbs">
            <h1>تماس با ما <span class="style-color">.</span></h1>
            <div class="breadcrumb-trail link-style-2">
            </div>
        </div>
        </div>
    </div>
    </div>
</section><br><br>
        <section class="tf-map">
          <div class="container">
            <div class="row">
              <div class="col-md-12">
                <div class="inner">
                  <iframe
                    class="map-content"
                    src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d7302.453092836291!2d90.47477022812872!3d23.77494577893369!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1svi!2s!4v1627293157601!5m2!1svi!2s"
                    allowfullscreen=""
                    loading="lazy"
                  ></iframe>
                </div>
              </div>
            </div>
          </div>
        </section>

        <section class="flat-contact flat-blog-details">
          <div class="container">
            <div class="row">
              <div class="col-lg-6 col-md-5">
                <div class="box">
                  <div class="heading">
                    <div class="sub-title-contact">
                      سلام! بیایید با شرکت خود صحبت کنیم
                    </div>
                    <?php $group_footer = myprefix_get_option('group_footer'); $group_footer = $group_footer[0]; ?>
                    <div class="title-contact">
                     <span class="text-color-3"><?= $group_footer['address'] ?></span>
                    </div>
                  </div>
                  
                  <ul class="contact">
                    <li class="link-style-3">
                      ایمیل:
                      <a href="<?= $group_footer['email'] ?>" class="meta-mail"
                        ><?= $group_footer['email'] ?></a
                      >
                    </li>
                    <?php $group_header = myprefix_get_option('group_header'); $group_header = $group_header[0];  ?>
                    <li class="link-style-3">
                      تلفن:
                      <a href="tel:012345678" class="meta-phone"
                        ><?= $group_header['mobile'] ?></a
                      >
                    </li>
                  </ul>
                </div>
              </div>
              <div class="col-lg-6 col-md-7">
                <div class="post">
                  <div id="respond" class="respond-comment">
                    <h2 class="title-comment">
                      بخش <span class="text-color-3">[تماس با ما]</span>
                    </h2>
                    <p class="text">
                      لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ
                      و با استفاده از طراحان گرافیک است
                    </p>

                    <form
                      method="post"
                      id="contactform"
                      class="comment-form form-submit"
                      action=""
                      accept-charset="utf-8"
                      novalidate="novalidate"
                    >
                      <div class="text-wrap clearfix">
                        <fieldset class="name-wrap style-text">
                          <input
                            type="text"
                            id="name"
                            class="tb-my-input"
                            name="name"
                            tabindex="1"
                            placeholder="نام را وارد کنید"
                            value=""
                            size="32"
                            aria-required="true"
                            required=""
                          />
                        </fieldset>
                        <fieldset class="email-wrap style-text">
                          <input
                            type="email"
                            id="email"
                            class="tb-my-input"
                            name="email"
                            tabindex="2"
                            placeholder="ادرس ایمیل را وارد کنید"
                            value=""
                            size="32"
                            aria-required="true"
                            required=""
                          />
                        </fieldset>
                        <fieldset class="phone-wrap style-text">
                          <input
                            type="tel"
                            id="phone"
                            class="tb-my-input"
                            name="phone"
                            tabindex="1"
                            placeholder="۰۹۰۴-۴۵۴-۴۵۴۵"
                            value=""
                            size="32"
                            aria-required="true"
                            required=""
                          />
                        </fieldset>
                        <fieldset class="site-wrap style-text">
                          <input
                            type="text"
                            id="site"
                            class="tb-my-input"
                            name="site"
                            tabindex="1"
                            placeholder="وبسایت را وارد کنید"
                            value=""
                            size="32"
                            aria-required="true"
                            required=""
                          />
                        </fieldset>
                      </div>
                      <fieldset class="message-wrap">
                        <textarea
                          id="comment-message"
                          name="message"
                          rows="8"
                          tabindex="4"
                          placeholder="پیام خود را وارد نمایید
                          "
                          aria-required="true"
                        ></textarea>
                      </fieldset>
                      <button
                        name="submit"
                        type="submit"
                        id="comment-reply"
                        class="button btn-style4 btn-submit-comment"
                      >
                        <span> اکنون ارسال کنید </span>
                      </button>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
<?php get_footer() ?>