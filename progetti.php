<?php
/*
Template Name: Progetti
*/

get_header('black'); ?>

<div class="page page-projects">


    <section class="page-head page-head_light wow fadeIn">
        <div class="container">
            <div class="row">
                <a href="<?php echo get_field('sh_bottone')['url'] ?>"
                    class="btn-line"><?php echo get_field('sh_bottone')['title'] ?></a>
                <h1 class="title s1"><?php the_title() ?></h1>
            </div>
        </div>
    </section>

    <section class="projects">
        <div class="container">
            <div class="row title-section center wow fadeIn" data-wow-delay="0.2s">
                <h2 class="title s2"><?php echo get_field('testo_alto_grande') ?></h2>
            </div>
            <div class="row">
                <div class="col col01 wow fadeInUp" data-wow-delay="0.2s">
                    <a href="" class="project-cat"
                        style="background-image: url(<?php echo get_field('categorie_categoria_1_immagine') ?>);">
                        <div class="progect-cat__info">
                            <h3 class="project-cat__title"><?php echo get_field('categorie_categoria_1_titolo') ?></h3>
                            <p class="project-cat__text"><?php echo get_field('categorie_categoria_1_descrizione') ?>
                            </p>
                        </div>
                    </a>
                </div>
                <div class="col col02 wow fadeInUp" data-wow-delay="0.1s">
                    <a href="" class="project-cat"
                        style="background-image: url(<?php echo get_field('categorie_categoria_2_immagine') ?>);">
                        <div class="progect-cat__info">
                            <h3 class="project-cat__title"><?php echo get_field('categorie_categoria_2_titolo') ?></h3>
                            <p class="project-cat__text"><?php echo get_field('categorie_categoria_2_descrizione') ?>
                            </p>
                        </div>
                    </a>
                </div>
                <div class="col col03 wow fadeInUp" data-wow-delay="0.3s">
                    <a href="" class="project-cat"
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

    <section class="contact-form contact-form_light wow fadeInUp">
        <div class="container">
            <div class="row">
                <div class="contact-form__box">
                    <div class="row row01">
                        <div class="text">
                            <p><?php the_field('sezione_contatti_sottotitolo') ?></p>
                        </div>
                    </div>
                    <div class="row row02">
                        <div class="col col01">
                            <h2 class="contact-form__title title"><?php the_field('sezione_contatti_titolo') ?></h2>
                        </div>
                        <div class="col col02">
                            <div class="contact-form__text text">
                                <p><?php the_field('sezione_contatti_descrizione') ?> </p>
                            </div>
                        </div>
                    </div>
                    <div class="row row03">
                        <?php echo do_shortcode(get_field('sezione_contatti_form_shortcode')) ?>
                    </div>
                </div>
            </div>
        </div>
    </section>



</div>

<?php get_footer();