<?php /* Template Name: Page builder */ ?>

<?php get_header(); ?>


    <div class="main-page-wrap">

        <?php if (have_rows('page_builder')):
            while (have_rows('page_builder')) : the_row();

                get_template_part( 'template_parts/page_builder/section_' . get_row_layout());

            endwhile;
        endif; ?>

    </div>


<?php get_footer(); ?>