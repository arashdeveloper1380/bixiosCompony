<?php get_header() ?>
<section class="tf-space flat-study flat-work flat-case page">
    <div class="container">
        <div class="row">
            <?php while(have_posts()): the_post() ?>
                <div class="col-lg-4 col-md-6">
                    <div class="work-slider">
                        <div class="work-post style wow fadeInUp" data-wow-delay="0ms" data-wow-duration="500ms" style="visibility: visible; animation-duration: 500ms; animation-delay: 0ms; animation-name: fadeInUp;">
                        <div class="media">
                            <img src="<?php the_post_thumbnail_url() ?>" alt="images">
                        </div>
                        <div class="content">
                            <div class="tags"><span>
                            <?php
                                $term_list = get_the_terms(get_the_ID(), 'portfolio_cat');
                                $types ='';
                                foreach($term_list as $term_single) {
                                    $types .= ucfirst($term_single->name).', ';
                                }
                                $typesz = rtrim($types, ', ');
                                echo $typesz;
                            ?>
                            </span></div>
                            <h3>
                            <a href="<?php the_permalink() ?>"><?php the_title() ?></a>
                            </h3>
                        </div>
                        </div>
                    </div>
                </div>
            <?php endwhile; ?>
        </div>
    </div>
</section>
<?php get_footer() ?>