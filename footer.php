<?php 
$obj = get_queried_object();
if(get_field('bf_attivo', $obj) == 'Visibile') : ?>
<section class="a07 wow fadeIn">
    <div class="bg-box" style="background-image: url(<?php the_field('bf_immagine', $obj) ?>);">
        <div class="container">
            <div class="row center">
                <h3 class="bg-box__title wow fadeIn" data-wow-delay="0.5s"><?php the_field('bf_testo', $obj) ?></h3>
                <a href="<?php the_field('bf_bottone_link', $obj) ?>" class="btn-line btn-line_white wow fadeIn"
                    data-wow-delay="0.8s"><?php the_field('bf_bottone_testo', $obj) ?>
                </a>
            </div>
        </div>
    </div>
</section>
<?php endif; ?>

<?php if(!is_page('progetti') && !is_page('contatti') ) : ?>
<section class="contact-form wow fadeIn">
    <div class="container">
        <div class="row row-main">
            <div class="col col-main01 wow fadeInUp">
                <img src="<?php the_field('sezione_contatti_immagine', 'option'); ?>" alt="team">
            </div>
            <div class="col col-main02">
                <div class="contact-form__box">
                    <div class="row row01">
                        <div class="text">
                            <p><?php the_field('sezione_contatti_sottotitolo', 'option'); ?></p>
                        </div>
                    </div>
                    <div class="row row02">
                        <div class="col col01">
                            <h2 class="contact-form__title title">
                                <?php the_field('sezione_contatti_titolo', 'option'); ?></h2>
                        </div>
                        <div class="col col02">
                            <div class="contact-form__text text">
                                <p><?php the_field('sezione_contatti_descrizione', 'option'); ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="row row03">
                        <?php echo do_shortcode(get_field('sezione_contatti_form_shortcode', 'option')) ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php endif; ?>

<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col col01">
                <div class="item-contact">
                    <img src="<?php the_field('logo_white', 'option'); ?>" alt="logo">
                    <ul>
                        <li>
                            <p><?php the_field('indirizzo_ita', 'option'); ?></p>
                        </li>
                        <li>
                            <a href="tel:<?php the_field('telefono_ita', 'option'); ?>">T:
                                <?php the_field('telefono_ita', 'option'); ?></a>
                        </li>
                        <li>
                            <a href="mailto:<?php the_field('email_ita', 'option'); ?>"><?php _e('Email:'); ?>
                                <?php the_field('email_ita', 'option'); ?></a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col col02">
                <div class="item-contact">
                    <img src="<?php the_field('logo_suisse_white', 'option'); ?>" alt="logo">
                    <ul>
                        <li>
                            <?php the_field('indirizzo_suisse', 'option'); ?></p>
                        </li>
                        <li>
                            <a href="tel:<?php the_field('telefono_suisse', 'option'); ?>"><?php _e('T:'); ?>
                                <?php the_field('telefono_suisse', 'option'); ?></a>
                        </li>
                        <li>
                            <a href="mailto:<?php the_field('email_suisse', 'option'); ?>"><?php _e('Email:'); ?>
                                <?php the_field('email_suisse', 'option'); ?></a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col col03">
                <nav>
                    <?php wp_nav_menu( array( 
                                              'menu' => 'Footer Menu',
                                              'theme_location' => 'footer-menu', 
                                              'container' => 'nav', 
                                              'menu_class' => 'nav-list') 
                                              ); ?>
                </nav>
            </div>
            <div class="col col04">
                <div class="social">
                    <h4 class="social-title"><?php _e('Seguici'); ?></h4>
                    <div class="social-box">
                        <a href="<?php the_field('linkedin', 'option'); ?>" class="social-link">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M5 1.25C3.48122 1.25 2.25 2.48122 2.25 4C2.25 5.51878 3.48122 6.75 5 6.75C6.51878 6.75 7.75 5.51878 7.75 4C7.75 2.48122 6.51878 1.25 5 1.25ZM3.75 4C3.75 3.30964 4.30964 2.75 5 2.75C5.69036 2.75 6.25 3.30964 6.25 4C6.25 4.69036 5.69036 5.25 5 5.25C4.30964 5.25 3.75 4.69036 3.75 4Z" />
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M2.25 8C2.25 7.58579 2.58579 7.25 3 7.25H7C7.41421 7.25 7.75 7.58579 7.75 8V21C7.75 21.4142 7.41421 21.75 7 21.75H3C2.58579 21.75 2.25 21.4142 2.25 21V8ZM3.75 8.75V20.25H6.25V8.75H3.75Z" />
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M9.25 8C9.25 7.58579 9.58579 7.25 10 7.25H14C14.4142 7.25 14.75 7.58579 14.75 8V8.43402L15.1853 8.24748C15.9336 7.92676 16.7339 7.72565 17.5433 7.65207C20.3182 7.3998 22.75 9.58038 22.75 12.3802V21C22.75 21.4142 22.4142 21.75 22 21.75H18C17.5858 21.75 17.25 21.4142 17.25 21V14C17.25 13.6685 17.1183 13.3505 16.8839 13.1161C16.6495 12.8817 16.3315 12.75 16 12.75C15.6685 12.75 15.3505 12.8817 15.1161 13.1161C14.8817 13.3505 14.75 13.6685 14.75 14V21C14.75 21.4142 14.4142 21.75 14 21.75H10C9.58579 21.75 9.25 21.4142 9.25 21V8ZM10.75 8.75V20.25H13.25V14C13.25 13.2707 13.5397 12.5712 14.0555 12.0555C14.5712 11.5397 15.2707 11.25 16 11.25C16.7293 11.25 17.4288 11.5397 17.9445 12.0555C18.4603 12.5712 18.75 13.2707 18.75 14V20.25H21.25V12.3802C21.25 10.4759 19.589 8.97227 17.6791 9.14591C17.025 9.20536 16.3784 9.36807 15.7762 9.6262L14.2954 10.2608C14.0637 10.3601 13.7976 10.3363 13.5871 10.1976C13.3767 10.0588 13.25 9.82354 13.25 9.57143V8.75H10.75Z" />
                            </svg>
                        </a>
                        <a href="<?php the_field('instagram', 'option'); ?>" class="social-link">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M16.0002 7.00005C16.0002 6.44776 16.4479 6.00005 17.0002 6.00005C17.5525 6.00005 18.0002 6.44776 18.0002 7.00005C18.0002 7.55233 17.5525 8.00005 17.0002 8.00005C16.4479 8.00005 16.0002 7.55233 16.0002 7.00005Z" />
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M12.0002 7.25005C9.37683 7.25005 7.25018 9.37669 7.25018 12C7.25018 14.6234 9.37683 16.75 12.0002 16.75C14.6235 16.75 16.7502 14.6234 16.7502 12C16.7502 9.37669 14.6235 7.25005 12.0002 7.25005ZM8.75018 12C8.75018 10.2051 10.2053 8.75005 12.0002 8.75005C13.7951 8.75005 15.2502 10.2051 15.2502 12C15.2502 13.795 13.7951 15.25 12.0002 15.25C10.2053 15.25 8.75018 13.795 8.75018 12Z" />
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M17.2584 2.83306C13.7919 2.44562 10.2085 2.44562 6.74195 2.83306C4.7299 3.05794 3.10556 4.64295 2.86901 6.66548C2.45447 10.2098 2.45447 13.7903 2.86901 17.3346C3.10556 19.3571 4.7299 20.9422 6.74195 21.167C10.2085 21.5545 13.7919 21.5545 17.2584 21.167C19.2705 20.9422 20.8948 19.3571 21.1314 17.3346C21.5459 13.7903 21.5459 10.2098 21.1314 6.66548C20.8948 4.64295 19.2705 3.05794 17.2584 2.83306ZM6.90856 4.32378C10.2644 3.94871 13.736 3.94871 17.0918 4.32378C18.4219 4.47244 19.4874 5.52205 19.6415 6.83973C20.0425 10.2683 20.0425 13.7318 19.6415 17.1604C19.4874 18.478 18.4219 19.5277 17.0918 19.6763C13.736 20.0514 10.2644 20.0514 6.90856 19.6763C5.57846 19.5277 4.51297 18.478 4.35885 17.1604C3.95786 13.7318 3.95786 10.2683 4.35885 6.83973C4.51297 5.52205 5.57845 4.47244 6.90856 4.32378Z" />
                            </svg>
                        </a>
                        <a href="<?php the_field('facebook', 'option'); ?>" class="social-link">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M10.4877 3.78769C11.4723 2.80312 12.8076 2.25 14.2 2.25H16.9C17.3142 2.25 17.65 2.58579 17.65 3V6.6C17.65 7.01421 17.3142 7.35 16.9 7.35H14.2C14.1602 7.35 14.1221 7.3658 14.0939 7.39393C14.0658 7.42206 14.05 7.46022 14.05 7.5V9.45H16.9C17.131 9.45 17.349 9.5564 17.4912 9.73844C17.6333 9.92048 17.6836 10.1578 17.6276 10.3819L16.7276 13.9819C16.6441 14.3158 16.3442 14.55 16 14.55H14.05V21C14.05 21.4142 13.7142 21.75 13.3 21.75H9.7C9.28579 21.75 8.95 21.4142 8.95 21V14.55H7C6.58579 14.55 6.25 14.2142 6.25 13.8V10.2C6.25 9.78579 6.58579 9.45 7 9.45H8.95V7.5C8.95 6.10761 9.50312 4.77226 10.4877 3.78769ZM14.2 3.75C13.2054 3.75 12.2516 4.14509 11.5483 4.84835C10.8451 5.55161 10.45 6.50544 10.45 7.5V10.2C10.45 10.6142 10.1142 10.95 9.7 10.95H7.75V13.05H9.7C10.1142 13.05 10.45 13.3858 10.45 13.8V20.25H12.55V13.8C12.55 13.3858 12.8858 13.05 13.3 13.05H15.4144L15.9394 10.95H13.3C12.8858 10.95 12.55 10.6142 12.55 10.2V7.5C12.55 7.06239 12.7238 6.64271 13.0333 6.33327C13.3427 6.02384 13.7624 5.85 14.2 5.85H16.15V3.75H14.2Z" />
                            </svg>
                        </a>
                    </div>
                </div>
                <div class="police">
                    <a href=""><?php _e('Posizioni Aperte'); ?></a>
                    <a href=""><?php _e('Policy aziendale'); ?></a>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-after">
        <div class="container">
            <div class="row">
                <p><?php the_field('copyright', 'option'); ?></p>
                <div>
                    <a href=""><?php _e('Informativa estesa sui Cookie'); ?></a>
                    <a href=""><?php _e('Informativa sulla Privacy'); ?></a>
                </div>
            </div>
        </div>
    </div>
</footer>


<?php wp_footer(); ?>

</body>

</html>