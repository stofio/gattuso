<?php
/*
Template Name: Homepage
*/

get_header(); ?>

<div class="page-home">

    <section class="section main wow fadeIn">
        <div class="home-slider-wrap">
            <div class="home-slider slick-slider">
                <?php 
                if( have_rows('single_slide') ):
                    // Loop through rows.
                    while( have_rows('single_slide') ) : the_row();
                ?>

                <div class="home-slider__slide"
                    style="background-image: url(<?php echo get_sub_field('immagine'); ?>);">
                    <div class="container">
                        <div class="row">
                            <a href="#"
                                class="home-slider__link btn-line btn-line_white"><?php echo get_sub_field('sottotitolo'); ?></a>
                            <h2 class="home-slider__title title"><?php echo get_sub_field('titolo'); ?></h2>
                        </div>
                    </div>
                </div>

                <?php
                        endwhile;
                    endif;
                    
                ?>

            </div>
            <div class="progressBarContainer">
                <div class="container">
                    <div class="row">
                        <?php 
                        if( have_rows('single_slide') ):
                            // Loop through rows.
                            while( have_rows('single_slide') ) : the_row();

                            $num = get_row_index();
                        ?>

                        <div class="item">
                            <span class="item-num"><?php echo $num; ?></span>
                            <div class="item-hidden">
                                <span data-slick-index="<?php echo $num - 1; ?>" class="progressBar"></span>
                                <span class="item-title"><?php echo get_sub_field('bottoni_bassi') ?></span>
                            </div>
                        </div>

                        <?php
                                endwhile;
                            endif;
                            
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="h01 section-info">
        <div class="container-fluid">
            <div class="row">
                <div class="col col01">
                    <div class="item-img wow fadeIn">
                        <img src="<?php echo get_field('as_immagine') ?>">
                    </div>
                </div>
                <div class="col col02">
                    <div class="item-info">
                        <h2 class="title s2 wow fadeInUp" data-wow-delay="0.3s"><?php echo get_field('as_titolo') ?>
                        </h2>
                        <div class="text wow fadeInUp" data-wow-delay="0.4s">
                            <p><?php echo get_field('as_descrizione') ?></p>
                        </div>
                        <a href="<?php echo get_field('as_bottone')['url'] ?>" class="btn-line wow fadeInUp"
                            data-wow-delay="0.5s"><?php echo get_field('as_bottone')['title'] ?></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="h02 projects">
        <div class="container">
            <div class="row title-section center wow fadeIn" data-wow-delay="0.2s">
                <h2 class="title s2"><?php echo get_field('tga_testo') ?></h2>
            </div>
            <div class="row">
                <div class="col col01 wow fadeInUp" data-wow-delay="0.2s">
                    <a href="<?php echo get_field('categorie_categoria_1_link') ?>" class="project-cat"
                        style="background-image: url(<?php echo get_field('categorie_categoria_1_immagine') ?>);">
                        <div class="progect-cat__info">
                            <h3 class="project-cat__title"><?php echo get_field('categorie_categoria_1_titolo') ?></h3>
                            <p class="project-cat__text"><?php echo get_field('categorie_categoria_1_descrizione') ?>
                            </p>
                        </div>
                    </a>
                </div>
                <div class="col col02 wow fadeInUp" data-wow-delay="0.1s">
                    <a href="<?php echo get_field('categorie_categoria_2_link') ?>" class="project-cat"
                        style="background-image: url(<?php echo get_field('categorie_categoria_2_immagine') ?>);">
                        <div class="progect-cat__info">
                            <h3 class="project-cat__title"><?php echo get_field('categorie_categoria_2_titolo') ?></h3>
                            <p class="project-cat__text"><?php echo get_field('categorie_categoria_2_descrizione') ?>
                            </p>
                        </div>
                    </a>
                </div>
                <div class="col col03 wow fadeInUp" data-wow-delay="0.3s">
                    <a href="<?php echo get_field('categorie_categoria_3_link') ?>" class="project-cat"
                        style="background-image: url(<?php echo get_field('categorie_categoria_3_immagine') ?>);">
                        <div class="progect-cat__info">
                            <h3 class="project-cat__title"><?php echo get_field('categorie_categoria_3_titolo') ?></h3>
                            <p class="project-cat__text"><?php echo get_field('categorie_categoria_3_descrizione') ?>
                            </p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section class="h03">
        <div class="container">
            <div class="row title-section center wow fadeInUp" data-wow-delay="0.2s">
                <h2 class="title s2"><?php echo get_field('tgb_testo') ?></h2>

                <a href="<?php echo get_field('tgb_button_link')['url'] ?>" class="btn-line wow fadeInUp"
                    data-wow-delay="0.4s"><?php echo get_field('tgb_button_link')['title'] ?></a>
            </div>
        </div>
    </section>

    <section class="h04 why">
        <div class="container">
            <div class="row title-section center wow fadeInUp">
                <h2 class="title s2"><?php echo the_field('ps_titolo') ?></h2>
            </div>
            <div class="row">
                <?php 
                if( have_rows('box') ):
                    // Loop through rows.
                    while( have_rows('box') ) : the_row();

                    $num = get_row_index();
                ?>

                <div class="col wow fadeIn" data-wow-delay="0.2s">
                    <div class="item">
                        <div class="item-num">0<?php echo $num; ?></div>
                        <h3 class="item-title"><?php echo get_sub_field('titolo') ?></h3>
                        <div class="text item-text">
                            <p><?php echo get_sub_field('descrizione') ?></p>
                        </div>
                    </div>
                </div>

                <?php
                    endwhile;
                endif;
                ?>

            </div>
        </div>
    </section>

    <section class="h05 process section-info">
        <div class="container-fluid">
            <div class="row">
                <div class="col col01 wow fadeIn">
                    <div class="faq__imgs">
                        <?php 
                    if( have_rows('scheda') ):
                        // Loop through rows.
                        while( have_rows('scheda') ) : the_row();

                        $num = get_row_index();
                    ?>

                        <div class="faq__img faq__img_0<?php echo $num; ?> <?php if($num == 1) echo 'active' ?>"
                            style="background-image: url(<?php echo get_sub_field('immagine') ?>);">
                        </div>

                        <?php
                        endwhile;
                    endif;
                    ?>
                    </div>
                </div>

                <div class="col col02">
                    <div class="item-info wow fadeIn">
                        <h2 class="title s2"><?php echo the_field('sp_titolo') ?></h2>
                        <div class="faq">
                            <?php 
                            if( have_rows('scheda') ):
                                // Loop through rows.
                                while( have_rows('scheda') ) : the_row();

                                $num = get_row_index();
                            ?>

                            <div class="faq__item <?php if($num == 1) echo 'in' ?>"
                                data-img=".faq__img_0<?php echo $num; ?>">
                                <h3 class="faq__title"><?php echo get_sub_field('titolo') ?></h3>
                                <div class="faq__line">
                                    <svg width="13" height="9" viewBox="0 0 13 9" class="faq__icon" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M5.60495 1.52462C5.18818 1.41405 4.94085 0.989904 5.05252 0.57726C5.16419 0.164616 5.59258 -0.080265 6.00935 0.0303024L11.7011 1.54031C12.1179 1.65088 12.3652 2.07502 12.2536 2.48767L10.7284 8.12309C10.6168 8.53573 10.1884 8.78061 9.77162 8.67004C9.35484 8.55948 9.10751 8.13533 9.21919 7.72268L10.2561 3.89107L1.51529 8.88763C1.14162 9.10123 0.663815 8.97447 0.448079 8.6045C0.232343 8.23454 0.360371 7.76146 0.734036 7.54786L9.47488 2.5513L5.60495 1.52462Z"
                                            fill="black" />
                                    </svg>
                                </div>
                                <div class="faq__text text">
                                    <p><?php echo get_sub_field('descrizione') ?></p>
                                </div>
                            </div>

                            <?php
                                endwhile;
                            endif;
                            ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="h06 projects02">
        <div class="container">
            <div class="row row01">

                <?php
            $progetti = get_field('progetti');
            if( $progetti ): ?>
                <?php foreach( $progetti as $key=>$post ): 

                    // Setup this post for WP functions (variable must be named $post).
                    setup_postdata($post); ?>

                <div
                    class="col col0<?php echo $key + 1; ?> wow <?php if($key == 0) { echo 'fadeIn'; } else { echo 'fadeInUp'; } ?>">
                    <a href="<?php the_permalink(); ?>" class="project-box">
                        <div class="project-box__img"
                            style="background-image: url(<?php the_field( 'cover_and_thumbnail_thumbnail' ); ?>);">
                            <h3 class="project-box__cat"><?php _e('Visualizza'); ?></h3>
                        </div>
                        <div class="project-box__info">
                            <h3 class="project-box__title"><?php the_title(); ?></h3>
                            <p class="project-box__subtitle"><?php echo get_the_category()[0]->name ?></p>
                        </div>
                    </a>
                </div>

                <?php if($key == 2) break; ?>

                <?php endforeach; ?>
                <?php 
                // Reset the global post object so that the rest of the page works correctly.
                wp_reset_postdata(); ?>
                <?php endif; ?>

            </div>

            <div class="row row02 wow fadeIn">
                <div class="item-info">
                    <h2 class="title s2 item-title"><?php echo get_field('titdesc_titolo') ?></h2>
                    <div class="text">
                        <p><?php echo get_field('titdesc_descrizione') ?></p>
                    </div>
                    <a href="<?php echo get_field('titdesc_button')['url'] ?>"
                        class="btn-line"><?php echo get_field('titdesc_button')['title'] ?></a>
                </div>
            </div>

            <div class="row row03">

                <?php
            $progetti = get_field('progetti');
            if( $progetti ): ?>
                <?php foreach( $progetti as $key=>$post ): 

                    if($key == 0 || $key == 1 || $key == 2) continue;

                    // Setup this post for WP functions (variable must be named $post).
                    setup_postdata($post); ?>

                <div class="col col0<?php echo $key - 2; ?> wow fadeInUp">
                    <a href="<?php the_permalink(); ?>" class="project-box">
                        <div class="project-box__img"
                            style="background-image: url(<?php the_field( 'cover_and_thumbnail_thumbnail' ); ?>);">
                            <h3 class="project-box__cat"><?php _e('Visualizza'); ?></h3>
                        </div>
                        <div class="project-box__info">
                            <h3 class="project-box__title"><?php the_title(); ?></h3>
                            <p class="project-box__subtitle"><?php echo get_the_category()[0]->name ?></p>
                        </div>
                    </a>
                </div>

                <?php endforeach; ?>
                <?php 
                // Reset the global post object so that the rest of the page works correctly.
                wp_reset_postdata(); ?>
                <?php endif; ?>


            </div>
        </div>
    </section>



</div>

<?php get_footer();