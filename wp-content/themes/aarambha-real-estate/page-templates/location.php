<?php
/**
 *
 * Template Name: Location Listing Page
 *
 * The template for displaying content of property location listing  page.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link    https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Aarambha_Real_Estate
 */

get_header();
?>

<?php
/**
 * Functions hooked into aarambha_real_estate_content_before action
 *
 * @hooked aarambha_real_estate_content_before_wrapper_start     - 10
 */
do_action( 'aarambha_real_estate_content_before' );
?>

<div id="primary" <?php Aarambha_Real_Estate_Helper::primary_class();?>>
    <main id="main" class="site-main">

        <?php
        /**
         * Functions hooked into aarambha_real_estate_page_content_loop_before action
         *
         */
        do_action('aarambha_real_estate_page_content_loop_before');

        while ( have_posts() ) : the_post();

            /**
             * Functions hooked into aarambha_real_estate_page_content_before action
             *
             */
            do_action('aarambha_real_estate_page_content_before');

            get_template_part( 'template-parts/content', 'location' );

            /**
             * Functions hooked into aarambha_real_estate_page_content_after action
             *
             */
            do_action('aarambha_real_estate_page_content_after');

        endwhile; // End of the loop.

        /**
         * Functions hooked into aarambha_real_estate_page_content_loop_after action
         *
         */
        do_action('aarambha_real_estate_page_content_loop_after');
        ?>

    </main><!-- #main -->
</div><!-- #primary -->

<?php
/**
 * Functions hooked into aarambha_real_estate_content_after action
 *
 * @hooked aarambha_real_estate_content_after_wrapper_end     - 10
 */
do_action( 'aarambha_real_estate_content_after' );
?>

<?php get_footer(); ?>
