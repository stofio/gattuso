<?php
/*
Template Name: Contatti
*/

get_header('black'); ?>

<div class="page page-contacts wow fadeIn">

    <section class="page-head page-head_light fadeIn">
        <div class="container">
            <div class="row">
                <a href="" class="btn-line"><?php the_title() ?></a>
                <h1 class="title s1"><?php echo get_field('titolo') ?></h1>
            </div> 
        </div>
    </section>

    <section class="color-box wow fadeInUp">
        <h3 class="title s3"><?php _e('Gattuso Contract') ?> <span><?php _e('Italia') ?></span></h3>
        <div class="row row01">
            <div class="col">
                <div class="item">
                    <div class="item-title"><?php _e('Vieni a trovarci') ?></div>
                    <div class="item-info"><?php echo get_field('contatti_italia_indirizzo') ?></div>
                </div>
                <div class="item">
                    <div class="item-title"><?php _e('Scrivici') ?></div>
                    <div class="item-info"><?php _e('Email') ?>: <a href="mailto:a.gattuso@gattusocontract.com"><?php echo get_field('contatti_italia_email') ?></div>
                </div>
            </div>
            <div class="col">
                <div class="item">
                    <div class="item-title"><?php _e('Chiamaci') ?></div>
                    <div class="item-info"><?php _e('Cell') ?>: <a href="tel:+390444023214"><?php echo get_field('contatti_italia_telefono') ?></a></div>
                </div>
                <div class="item">
                    <div class="item-title"><?php _e('P.IVA') ?></div>
                    <div class="item-info"><?php echo get_field('contatti_italia_piva') ?></div>
                </div>
            </div>
        </div>
        <h3 class="title title02 s3"><?php _e('Gattuso Contract') ?> <span><?php _e('Suisse') ?></span></h3>
        <div class="row row02">
            <div class="col">
                <div class="item">
                    <div class="item-title"><?php _e('Vieni a trovarci') ?></div>
                    <div class="item-info"><?php echo get_field('contatti_sui_indirizzo') ?></div>
                </div>
                <div class="item">
                    <div class="item-title"><?php _e('Scrivici') ?></div>
                    <div class="item-info"><?php _e('Email') ?>: <a href="mailto:a.gattuso@gattusocontract.com"><?php echo get_field('contatti_sui_email') ?></div>
                </div>
            </div>
            <div class="col">
                <div class="item">
                    <div class="item-title"><?php _e('Chiamaci') ?></div>
                    <div class="item-info"><?php _e('Cell') ?>: <a href="tel:+41782130698"><?php echo get_field('contatti_sui_telefono') ?></a></div>
                </div>
                <div class="item">
                    <div class="item-title"><?php _e('P.IVA') ?></div>
                    <div class="item-info"><?php echo get_field('contatti_sui_piva') ?></div>
                </div>
            </div>
        </div>
    </section>

    <section class="section02">
        <div class="row">
            <div class="col col01">
                <div class="item-map wow fadeIn">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2781.1772476456817!2d12.392534399999999!3d45.8077085!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4779419ca006fc03%3A0x1179ed4bd6b27ca3!2zVmlhIFRlenplLCAxLCAzMTAyMCBSYWkgVFYsINCG0YLQsNC70ZbRjw!5e0!3m2!1suk!2sua!4v1663522355437!5m2!1suk!2sua" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
            <div class="col col02">
                <div class="item-time">
                    <h3 class="title s3 wow fadeInUp"><?php echo get_field('titolo_trovarci') ?></h3>
                    <ul class="wow fadeInUp" data-wow-delay="0.3s">
                        <li><span><b><?php _e('Orari') ?></b></span></li>
                        <?php 
			            if( have_rows('orari') ):
			                // Loop through rows.
			                while( have_rows('orari') ) : the_row();
			            ?>

                        <li><span><?php echo get_sub_field('giorno') ?></span> <?php echo get_sub_field('orario') ?></li>

			            <?php
			                endwhile;
			            endif;
			                            
			            ?>                    
			        </ul>
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