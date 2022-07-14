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
            <h1>لیست بلاگ <span class="style-color">.</span></h1>
            <div class="breadcrumb-trail link-style-2">
            </div>
        </div>
        </div>
    </div>
    </div>
</section>
<div class="tf-space flat-blog flat-blog-details">
    <div class="container">
    <div class="row">
        <div class="col-lg-8 col-md-12">

        <?php while(have_posts()): the_post(); ?>
            <div class="flat-blog-grid">
                <div class="grid-post style-post">
                <div class="img-box">
                    <div class="media">
                    <img
                        src="<?php the_post_thumbnail_url() ?>"
                        alt="images"
                    />
                    <div class="tags"><?php the_date('d/m/Y') ?></div>
                    </div>
                </div>
                <div class="content">
                    <div class="meta link-style-3 font">
                    <a class="entry-author"> <?php the_author() ?></a>
                    <a class="entry-comment"><?php comments_popup_link('بدون دیدگاه','1 دیدگاه','% دیدگاه'); ?></a>
                    </div>
                    <h3 class="title-item">
                    <a href="<?php the_permalink() ?>"><?php the_title() ?></a>
                    </h3>
                    <p>
                    <?php the_excerpt() ?>
                    </p>
                    <div class="read-more link-style-3">
                    <a href="<?php the_permalink() ?>" class="readmore"
                        >ادامه مطلب</a
                    >
                    </div>
                </div>
                </div>
            </div>
            <?php endwhile; ?>


            <!-- <div class="themesflat-pagination clearfix">
                <ul>
                <li>
                    <a href="#" class="page-numbers prev-style"> قبلی </a>
                </li>
                <li><a href="#" class="page-numbers">۱</a></li>
                <li><a href="#" class="page-numbers current">۲</a></li>
                <li><a href="#" class="page-numbers">۳</a></li>
                <li>
                    <a href="#" class="page-numbers next-style"> بعدی </a>
                </li>
                </ul>
            </div> -->
        </div>
        <?php get_template_part('inc/sidebarcategory','widget') ?>
    </div>
    </div>
        </div>
<?php get_footer() ?>