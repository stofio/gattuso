<?php get_header(); ?>


<?php while ( have_posts() ) : the_post(); ?>


<div class="page page-blog-single">

    <section class="page-head wow fadeIn" style="background-image: url(<?php the_post_thumbnail_url() ?>);">
        <div class="container">
            <div class="row">
                <div class="cat">
                    <?php foreach(get_the_category() as $c) { 
                         //   var_dump($c);
                            $link = get_term_link($c->term_id);
                            echo "<a href='$link'>$c->name</a>";
                        } 
                    ?>
                </div>
                <a href="" class="btn-line btn-line_white"><?php the_author(); ?></a>
                <h1 class="title s2"><?php the_title(); ?></h1>
            </div>
        </div>
    </section>


    <div class="blog-content wow fadeIn">
        <div class="container">
            <div class="row" style="padding-top: 70px">
                <?php

					the_content();

			?>
            </div>
        </div>
    </div>

    <div class="blog-recent wow fadeIn">
        <div class="container">
            <div class="row center">
                <h3 class="title s3"><?php _e('Ti potrebbe interessare anche:'); ?></h3>
            </div>
            <?php
            $args = array(
                'numberposts' => 2,
                'orderby' => 'rand',
                'post__not_in' => array( $post->ID )
            );
            $otherPosts = get_posts($args);
            
            ?>
            <div class="row row02">
                <div class="col">
                    <a href="<?php echo get_permalink( $otherPosts[0]->ID ) ?>" class="item">
                        <div class="item-img"
                            style="background-image: url('<?php echo get_the_post_thumbnail_url( $otherPosts[0]->ID ) ?>');">
                        </div>
                        <h3 class="item-title"><?php echo $otherPosts[0]->post_title ?></h3>
                    </a>
                </div>
                <div class="col">
                    <a href="<?php echo get_permalink( $otherPosts[1]->ID ) ?>" class="item">
                        <div class="item-img"
                            style="background-image: url('<?php echo get_the_post_thumbnail_url( $otherPosts[1]->ID ) ?>');">
                        </div>
                        <h3 class="item-title"><?php echo $otherPosts[1]->post_title ?></h3>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="share wow fadeIn">
        <div class="container">
            <div class="row">
                <h3 class="share__title title s3"><?php _e('Condividi:'); ?></h3>
                <div class="share__box">
                    <a href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>"><img
                            src="<?php echo get_template_directory_uri() ?>/img/facebook.svg" alt=""></a>

                    <a href="https://telegram.me/share/url?url=<?php the_permalink(); ?>"><img
                            src="<?php echo get_template_directory_uri() ?>/img/telegram.svg" alt=""></a>

                    <a href="http://pinterest.com/pin/create/link/?url=<?php the_permalink(); ?>"><img
                            src="<?php echo get_template_directory_uri() ?>/img/pinterest.svg" alt=""></a>
                    <a
                        href="https://twitter.com/intent/tweet?url=<?php the_permalink(); ?>&text=<?php echo the_title(); ?>&via=<?php the_author_meta( 'twitter' ); ?>"><img
                            src="<?php echo get_template_directory_uri() ?>/img/twitter.svg" alt=""></a>

                    <a href="https://www.linkedin.com/sharing/share-offsite/?url=<?php the_permalink(); ?>"><img
                            src="<?php echo get_template_directory_uri() ?>/img/linkedin.svg" alt=""></a>
                </div>
            </div>
        </div>
    </div>


</div>


<?php endwhile; ?>


<?php get_footer(); ?>