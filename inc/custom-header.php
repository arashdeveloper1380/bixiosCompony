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
            <?php
             if(is_tax('servicce_cat')){ ?>
                <h1>لیست خدمات <span class="style-color">.</span></h1>
            <?php }if(is_singular('servicce')){?>
                <h1>جزئیات خدمات <span class="style-color">.</span></h1>
            <?php }if(is_tax('portfolio_cat')){ ?>
                <h1>لیست نمونه کار ها<span class="style-color">.</span></h1>
            <?php }if(is_singular('portfolio')){ ?>
                <h1>جزئیات نمونه کار <span class="style-color">.</span></h1>
            <?php }if(is_singular('post')){  ?>
                <h1>جزئیات بلاگ <span class="style-color">.</span></h1>
            <?php } ?>
            <div class="breadcrumb-trail link-style-2">
            <a class="home" href="<?php bloginfo('home') ?>">صفحه خانه</a>
            </div>
        </div>
        </div>
    </div>
    </div>
</section>