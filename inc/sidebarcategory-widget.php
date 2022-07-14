<div class="col-lg-4 col-md-12">
<aside class="side-bar">
    <div class="inner-side-bar">
    <div class="widget search">
        <div class="widget-title">
        <h3>اینجا جستجو کنید</h3>
        </div>
        <form
        action="#"
        method="get"
        role="search"
        class="search-form"
        >
        <input
            type="search"
            class="search-field"
            placeholder="کلمه کلیدی خود را وارد کنید..."
            value=""
            name="s"
            title="Search for"
            required=""
        />
        <button
            class="search-icon search-submit"
            type="submit"
            title="Search"
        ></button>
        </form>
    </div>
    <div class="widget widget-categories">
        <div class="widget-title item">
        <h3>دسته بندی</h3>
        </div>
        <ul>
        <?php
        $args = array('show_count'=>true,'title_li'=>false);
        $categoryAll = wp_list_categories($args);?>
        <li><?= $categoryAll ?></li>
        </ul>
    </div>
    <div class="widget-title item">
        <h3>وبلاگ های اخیر</h3>
    </div>
    <ul class="widget recent-news">
        <?php
            $args = array(
                'posts_per_page' => 4,
                'offset' => 0,
                'orderby' => 'ID',
                'order' => 'DESC',
                'post_type' => 'post',
                'suppress_filters' => true ,
            );
            $latest = new WP_Query($args);
            while($latest->have_posts()) : $latest->the_post() ?>
                <li>
                    <div class="thumb">
                        <img
                        src="<?php the_post_thumbnail_url()  ?>"
                        alt="images"
                        />
                    </div>
                    <div class="texts grid-post">
                        <div class="meta link-style-3 content font">
                        <a class="entry-author" href="team.html"><?= the_author() ?></a>
                        </div>
                        <h5>
                        <a href="<?php the_permalink() ?>">  
                            <?php the_title()?>
                        </a>
                        </h5>
                        <a href="<?php the_permalink() ?>" class="entry-button">
                        ادامه مطلب
                        </a>
                    </div>
                </li>
            <?php endwhile; ?>
    </ul>
        </div>
    </aside>
</div>