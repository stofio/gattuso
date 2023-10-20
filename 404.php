<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>

<div class="page page-thanks" style="padding: 300px 50px">

    <div class="container">
        <div class="page-head">
            <div class="row">
                <h1 class="title s2">404! <?php _e('Pagina non trovata!'); ?></h1>
            </div>
        </div>
        <div class="row text-center">
            <a href="<?php echo get_home_url(); ?>" class="btn-line"><?php _e('Home Page'); ?></a>
        </div>
    </div>

</div>

<?php get_footer();