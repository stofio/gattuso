<?php
/*
Template Name: Azienda
*/

get_header(); ?>

<div class="page page-azienda">

    <section class="page-head wow fadeIn" style="background-image: url(<?php echo get_field('hero_immagine') ?>);">
        <div class="container">
            <div class="row">
                <h1 class="title s1"><?php the_title() ?></h1>
            </div>
        </div>
    </section>

    <section class="a01">
        <div class="container">
            <div class="row title-section center wow fadeInUp">
                <h2 class="title s2"><?php echo get_field('testo_alto') ?></h2>
            </div>
        </div>
    </section>

    <section class="a02 section-info section-info_right-img">
        <div class="container-fluid">
            <div class="row">
                <div class="col col01 wow fadeIn">
                    <div class="item-img">
                        <img src="<?php echo get_field('ah_immagine') ?>" alt="woman">
                    </div>
                </div>
                <div class="col col02">
                    <div class="item-info">
                        <h2 class="title s2 wow fadeInUp" data-wow-delay="0.2s"><?php echo get_field('ah_titolo') ?>
                        </h2>
                        <div class="text wow fadeInUp" data-wow-delay="0.5s">
                            <p><?php echo get_field('ah_descrizione') ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="a03 section-info">
        <div class="container-fluid">
            <div class="row">
                <div class="col col01 wow fadeIn">
                    <div class="item-img">
                        <img src="<?php echo get_field('bt_immagine') ?>" alt="woman">
                    </div>
                </div>
                <div class="col col02">
                    <div class="item-info">
                        <h2 class="title s2 wow fadeInUp" data-wow-delay="0.2s"><?php echo get_field('bt_titolo') ?>
                        </h2>
                        <div class="text wow fadeInUp" data-wow-delay="0.5s"><?php echo get_field('bt_descrizione') ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="a04">
        <div class="container">
            <div class="row title-section center">
                <h2 class="title s2 wow fadeInUp"><?php echo get_field('testo_basso') ?>"</h2>
            </div>
        </div>
    </section>

    <section class="a05 team">
        <div class="row title-section center">
            <h2 class="title s2 wow fadeInUp"><?php echo get_field('team_title') ?></h2>
        </div>
        <div class="slick-slider team-slider wow fadeIn">

            <?php 
            if( have_rows('team_slide') ):
                // Loop through rows.
                while( have_rows('team_slide') ) : the_row();

            ?>

            <div class="slide">
                <div class="team-slider__slide">
                    <div class="team-slider__img">
                        <img src="<?php echo get_sub_field('immagine') ?>" alt="team">
                    </div>
                    <div class="team-slider__info">
                        <div>
                            <h4 class="team-slider__title"><?php echo get_sub_field('nome') ?></h4>
                            <p class="team-slider__subtitle title s4"><?php echo get_sub_field('titolo') ?></p>
                            <div class="team-slider__text text">
                                <p><?php echo get_sub_field('descrizione') ?></p>
                            </div>
                            <div class="btn-box">
                                <a href="<?php echo get_sub_field('bottone')['url'] ?>"
                                    class="btn-line"><?php echo get_sub_field('bottone')['title'] ?></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <?php
                endwhile;
            endif;
                            
            ?>

        </div>
        <div class="slick-nav">
            <div class="container-md">
                <div class="row">
                    <button class="btn-prev">
                        <svg class="icon icon-prev">
                            <use xlink:href="#icon-prev"></use>
                        </svg>
                    </button>
                    <div class="slick-nav__dots"></div>
                    <button class="btn-next">
                        <svg class="icon icon-next">
                            <use xlink:href="#icon-next"></use>
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </section>

    <section class="a06 section-info">
        <div class="container-fluid">
            <div class="row">
                <div class="col col01">
                    <div class="item-img wow fadeIn">
                        <img src="<?php echo get_field('at_immagine') ?>" alt="woman">
                    </div>
                </div>
                <div class="col col02">
                    <div class="item-info">
                        <h2 class="title s2 wow fadeInUp" data-wow-delay="0.2s"><?php echo get_field('at_titolo') ?>
                        </h2>
                        <div class="text wow fadeInUp" data-wow-delay="0.5s">
                            <p><?php echo get_field('at_descrizione') ?></p>
                        </div>
                        <a href="<?php echo get_field('bottone')['url'] ?>" class="btn-line wow fadeInUp"
                            data-wow-delay="0.8s"><?php echo get_field('bottone')['title'] ?></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

</div>

<?php get_footer();