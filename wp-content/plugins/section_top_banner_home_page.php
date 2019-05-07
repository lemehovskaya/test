<section class="section-top-banner-home-page">
    <div class="back-img"
         style="background-image: url('<?php echo wp_get_attachment_image_src(get_sub_field('background_image'), 'fullhd')[0]; ?>')">

        <img class="absolute-switch" src="<?php bloginfo('stylesheet_directory'); ?>/images/Switch-Icon.png'" alt="switch-icon">

        <div class="container">
            <div class="main-ttl-1 light-theme"><?php the_sub_field('title') ?></div>
        </div>
    </div>
</section>