<section class="section-news section-latest-news">
    <div class="container">

        <div class="main-ttl-2 blue-theme text-align-center"><?php the_sub_field('title') ?></div>

        <div class="content text-align-center light-blue-theme">
            <?php the_sub_field('description') ?>
        </div>

        <div class="wrapper-news">

            <?php

            if (get_query_var('paged')) {
                $paged = get_query_var('paged');
            } else if (get_query_var('page')) {
                $paged = get_query_var('page');
            } else {
                $paged = 1;
            }


            $args = array(
                'post_type' => 'post',
                'orderby' => 'date',
                'order' => 'ASC',
                'posts_per_page' => 3
            );

            query_posts($args);
            ?>

            <?php if (have_posts()) : ?>

                <?php while (have_posts()) : the_post(); ?>

                    <div class="news-item">
                        <div class="news-item-img">
                            <div class="rect-outer">
                                <div class="rect-inner back-img"
                                     style="background-image: url('<?php echo wp_get_attachment_image_src(get_field('image'), 'large')[0]; ?>')"></div>
                            </div>
                        </div>
                        <div class="news-item-content">
                            <div class="news-item-content-upper-part">
                                <div class="news-item-date light-blue-theme"><i
                                        class="icon icon-calendar-empty light-blue-theme"></i> <?php echo get_the_date('F j, Y'); ?>
                                </div>
                                <div class="news-item-comments light-blue-theme"><i class="light-blue-theme icon icon-comment-empty"> No Comments</i>
                                </div>
                            </div>
                            <div class="main-ttl-3 blue-theme news-item-title"><?php echo the_title() ?></div>
                        </div>
                    </div>

                <?php endwhile; ?>
            <?php endif; ?>

            <?php wp_reset_query(); ?>
        </div>

        <div class="wrapper-btn text-align-center">
            <a class="orange-btn view-more-news" href="">View All Text</a>
        </div>

    </div>
</section>