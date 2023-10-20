<?php get_header(); ?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.css">


<div class="page page-project-single">



    <section class="page-head wow fadeIn"

        style="background-image: url(<?php echo get_field('cover_and_thumbnail_cover') ?>);">

        <div class="container">

            <div class="row">

                <?php if(get_the_category()[0]->term_id != NULL): ?>

                <a href="<?php echo get_term_link(get_the_category()[0]->term_id) ?>"

                    class="btn-line btn-line_white"><?php echo get_the_category()[0]->name ?></a>

                <?php endif; ?>

                <h1 class="title s1"><?php the_title() ?></h1>

            </div>

        </div>

    </section>



    <section class="ps01 section-info section-info_right-img">

        <div class="container-fluid">

            <div class="row">

                <?php if(get_field('gall_1_galleria')): ?>
                <div class="col col01">

                    <div class="item-img">

                        <div class="project-gallery">


                            <?php foreach(get_field('gall_1_galleria') as $key=>$imgurl): ?>

                            <div class="popup-link gall1 col-img col-img0<?php echo $key + 1 ?> wow fadeInUp" 
                                data-popup-class=".popup-gallery1" data-photo-id="#photo<?php echo $key; ?>">

                                <img src="<?php echo $imgurl ?>" alt="">

                            </div>

                            <?php endforeach; ?>


                        </div>

                    </div>

                </div>
                <?php endif; ?>

                <div class="fixed-elem col col02">

                    <div class="item-info wow fadeIn">

                        <h2 class="title s2"><?php echo get_field('gall_1_titolo') ?></h2>

                        <div class="text">

                            <p><?php echo get_field('gall_1_testo') ?></p>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>



    <section class="ps02 section-info">

        <div class="container-fluid">

            <div class="row">

                <div class="col col01">

                    <div class="item-img">

                        <div class="project-gallery">

                            <div class="project-gallery">

                                <?php if(get_field('gall_2_galleria')): ?>

                                <?php foreach(get_field('gall_2_galleria') as $key=>$imgurl): ?>

                                <div class="popup-link gall2 col-img col-img0<?php echo $key + 1 ?> wow fadeInUp" 
                                    data-popup-class=".popup-gallery2" data-photo-id="#photo<?php echo $key; ?>">

                                    <img src="<?php echo $imgurl ?>" alt="">

                                </div>

                                <?php endforeach; ?>

                                <?php endif; ?>

                            </div>

                        </div>

                    </div>

                </div>

                <div class="fixed-elem02 col col02">

                    <div class="item-info wow fadeIn">

                        <h2 class="title s2"><?php echo get_field('gall_2_titolo') ?></h2>

                        <div class="text">

                            <p><?php echo get_field('gall_2_testo') ?></p>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>

    <!-- if there is no slide, hide section -->
    <?php if(get_field('slider_1')): ?>
    <section class="ps03">

        <div class="container">

            <div class="row title-section center">

                <h2 class="title s2 wow fadeInUp"><?php echo get_field('sl1_titolo') ?></h2>

                <p class="subtitle wow fadeInUp"><?php echo get_field('sl1_descrizione') ?> </p>

            </div>

            <div class="row wow fadeIn">

                    
                <div class="slick-slider ps03-slider">


                    <?php while( have_rows('slider_1') ) : the_row(); ?>

                    <div class="slide" style="background-image: url(<?php echo get_sub_field('immagine'); ?>);"></div>

                    <?php endwhile; ?>


                </div>

                <div class="slick-nav">

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

        </div>

    </section>
    <?php endif; ?>


    <!-- if there is no slide, hide section -->
    <?php if(get_field('slider_2')): ?>
    <section class="ps04 wow fadeIn">

        <div class="row">

            <div class="slick-slider ps04-slider">

                <?php while( have_rows('slider_2') ) : the_row(); ?>

                <div class="slide" style="background-image: url(<?php echo get_sub_field('immagine'); ?>);">

                    <div class="container">

                        <div class="row">

                            <h2 class="title s2"><?php echo get_sub_field('titolo'); ?></h2>

                        </div>

                    </div>

                </div>

                <?php endwhile; ?>

            </div>

            <div class="slick-nav02">

                <div class="container">

                    <div class="row">

                        <button class="btn-prev">

                            <svg class="icon icon-prev">

                                <use xlink:href="#icon-prev"></use>

                            </svg>

                        </button>

                        <div class="slick-nav__dots02"></div>

                        <button class="btn-next">

                            <svg class="icon icon-next">

                                <use xlink:href="#icon-next"></use>

                            </svg>

                        </button>

                    </div>

                </div>

            </div>

        </div>

    </section>
    <?php endif; ?>



    <section class="ps05">

        <div class="container">

            <div class="row">

                <div class="row title-section center wow fadeInUp">

                    <h2 class="title s2">L'Atelier dei <span>Progetti Architettonici</span></h2>

                </div>

                <div class="row">

                    <?php if(get_field('icona_testo')): ?>

                    <?php $i=0.4; ?>

                    <?php while( have_rows('icona_testo') ) : the_row(); ?>



                    <div class="col wow fadeIn" data-wow-delay="<?php echo $i ?>s">

                        <div class="item">

                            <img src="<?php echo get_sub_field('immagine'); ?>" alt="icon">

                            <div class="item-title"><?php echo get_sub_field('titolo'); ?></div>

                            <div class="item-num"><?php echo get_sub_field('testo_sotto'); ?></div>

                        </div>

                    </div>



                    <?php $i=$i+0.4; ?>

                    <?php endwhile; ?>

                    <?php endif; ?>

                </div>

            </div>

        </div>

    </section>







    <section class="ps06 other-projects wow fadeIn">

        <div class="row">

            <?php 

            $prev_post = get_adjacent_post(false, '', true); 

            if(empty($prev_post)) {

                //get last post

                $args = array(

                    'numberposts' => 1,

                    'orderby' => 'post_date',

                    'order' => 'DESC',

                    'post_type' => 'progetti',

                    'post_status' => 'publish'

                );

                

                $recent_posts = wp_get_recent_posts( $args, ARRAY_A );

                

                $prev_title = $recent_posts[0]['post_title'];

                $prev_link = get_permalink($recent_posts[0]['ID']);

                $prev_imgurl = get_field('cover_and_thumbnail_cover', $recent_posts[0]['ID']);

            }

            else {

                //get prev post

                $prev_title = $prev_post->post_title;

                $prev_link = get_permalink($prev_post->ID);

                $prev_imgurl = get_field('cover_and_thumbnail_cover', $prev_post->ID);

            }

            ?>

            <div class="col col01">

                <a href="<?php echo $prev_link ?>">

                    <div class="item" style="background-image: url(<?php echo $prev_imgurl ?>);">

                        <div class="item-icon">

                            <svg width="44" height="69" viewBox="0 0 44 69" fill="none"

                                xmlns="http://www.w3.org/2000/svg">

                                <path fill-rule="evenodd" clip-rule="evenodd"

                                    d="M20.4609 47.2866C20.0338 48.1138 19.3412 48.1138 18.9141 47.2866L13.0808 35.9894C12.6536 35.1622 12.6536 33.821 13.0808 32.9938L18.9141 21.6966C19.3412 20.8693 20.0338 20.8693 20.4609 21.6966C20.888 22.5238 20.888 23.865 20.4609 24.6922L15.401 34.4916L20.4609 44.291C20.888 45.1182 20.888 46.4594 20.4609 47.2866Z"

                                    fill="white" />

                                <path fill-rule="evenodd" clip-rule="evenodd"

                                    d="M29.4609 46.6868C29.0338 47.514 28.3412 47.514 27.9141 46.6868L22.0808 35.3896C21.6536 34.5623 21.6536 33.2211 22.0808 32.3939L27.9141 21.0967C28.3412 20.2695 29.0338 20.2695 29.4609 21.0967C29.888 21.9239 29.888 23.2651 29.4609 24.0923L24.401 33.8917L29.4609 43.6911C29.888 44.5184 29.888 45.8596 29.4609 46.6868Z"

                                    fill="white" />

                            </svg>

                        </div>

                        <div class="item-info">

                            <h3 class="title s2"><?php echo $prev_title ?></h3>

                            <a href="<?php echo $prev_link ?>"

                                class="btn-line btn-line_white"><?php _e('Precedente'); ?></a>

                        </div>

                    </div>

                </a>

            </div>

            <?php 

            $next_post = get_adjacent_post(false, '', false); 

            if(empty($next_post)) {

                //get first post

                $args = array(

                    'numberposts' => 1,

                    'orderby' => 'post_date',

                    'order' => 'ASC',

                    'post_type' => 'progetti',

                    'post_status' => 'publish'

                );

                

                $recent_posts = wp_get_recent_posts( $args, ARRAY_A );



                

                $next_title = $recent_posts[0]['post_title'];

                $next_link = get_permalink($recent_posts[0]['ID']);

                $next_imgurl = get_field('cover_and_thumbnail_cover', $recent_posts[0]['ID']);

            }

            else {

                //get next post

                $next_title = $next_post->post_title;

                $next_link = get_permalink($next_post->ID);

                $next_imgurl = get_field('cover_and_thumbnail_cover', $next_post->ID);

            }

            ?>

            <div class="col col02">

                <a href="<?php echo $next_link ?>">

                    <div class="item" style="background-image: url(<?php echo $next_imgurl ?>);">

                        <div class="item-info">

                            <h3 class="title s2"><?php echo $next_title ?></h3>

                            <a href="<?php echo $next_link ?>"

                                class="btn-line btn-line_white"><?php _e('Successivo'); ?></a>

                        </div>

                        <div class="item-icon">

                            <svg width="45" height="68" viewBox="0 0 45 68" fill="none"

                                xmlns="http://www.w3.org/2000/svg">

                                <path fill-rule="evenodd" clip-rule="evenodd"

                                    d="M14.5391 21.0966C14.9662 20.2694 15.6588 20.2694 16.0859 21.0966L21.9192 32.3938C22.3464 33.2211 22.3464 34.5622 21.9192 35.3895L16.0859 46.6867C15.6588 47.5139 14.9662 47.5139 14.5391 46.6867C14.112 45.8595 14.112 44.5183 14.5391 43.6911L19.599 33.8916L14.5391 24.0922C14.112 23.265 14.112 21.9238 14.5391 21.0966Z"

                                    fill="white" />

                                <path fill-rule="evenodd" clip-rule="evenodd"

                                    d="M24.5391 21.0966C24.9662 20.2694 25.6588 20.2694 26.0859 21.0966L31.9192 32.3938C32.3464 33.2211 32.3464 34.5622 31.9192 35.3895L26.0859 46.6867C25.6588 47.5139 24.9662 47.5139 24.5391 46.6867C24.112 45.8595 24.112 44.5183 24.5391 43.6911L29.599 33.8916L24.5391 24.0922C24.112 23.265 24.112 21.9238 24.5391 21.0966Z"

                                    fill="white" />

                            </svg>

                        </div>

                    </div>

                </a>

            </div>

        </div>

    </section>





</div>

<style>
    .popup.in {
  visibility: visible;
  transition: 0.3s;
  opacity: 1;
}


.popup {
  visibility: hidden;
  opacity: 0;
  min-height: 0;
  transition: 0.3s;
  position: fixed;
  left: 0;
  right: 0;
  top: 0;
  width: 100%;
  min-height: 100vh;
  background: rgba(0, 0, 0, 0.7019607843);
  z-index: 9999;
}
.popup__wrap {
  height: 100vh;
  width: 100%;
  display: flex;
  align-items: center;
}
.popup__close {
  top: 60px;
  position: absolute;
  left: 0;
  right: 0;
  z-index: 9999;
}
.popup__close-btn {
  float: right;
}

.gallery-slider {
  display: none;
  width: 100%;
}
.gallery-slider .slick-track {
  cursor: url("/img/cursor-next.png"), pointer;
}
.gallery-slider .slide.slick-current .slide-box {
  transform: scale(1);
  transition: 0.3s;
}
.gallery-slider .slide {
  width: 100%;
  box-sizing: border-box;
  padding: 20px 20px;
  text-align: center;
}
.gallery-slider .slide .title {
  text-align: left;
  margin-bottom: 30px;
}
.gallery-slider .slide .slide-box {
  display: inline-block;
  transform: scale(0.8);
  transition: 0.3s;
}
.gallery-slider .slide img {
  margin: auto;
  max-width: 100%;
  max-height: 80vh;
  height: auto;
}


@media screen and (max-width: 767px) {
  .popup__close {
    top: 30px;
  }
  .popup__close-btn img {
    height: 40px;
    width: 40px;
  }
}

</style>


<div class="popup popup-gallery1">
    <div class="popup__close">
        <div class="container-fluid">
            <button class="popup__close-btn gall1">
                <img src="<?php echo get_template_directory_uri()?>/img/close.svg" alt="close">
            </button>
        </div>
    </div>
    <div class="popup__wrap">
        <div class="slick-slider gallery-slider gall1">

        <?php if(get_field('gall_1_galleria')): ?>\
                <?php foreach(get_field('gall_1_galleria') as $key=>$imgurl): ?>

                    <div id="photo<?php echo $key; ?>" class="slide">
                        <div class="slide-box">
                            <img src="<?php echo $imgurl ?>" alt="image">
                        </div>
                    </div>

                <?php endforeach; ?>

        <?php endif; ?>
            
        </div>
    </div>
</div>


<div class="popup popup-gallery2">
    <div class="popup__close">
        <div class="container-fluid">
            <button class="popup__close-btn gall2">
                <img src="<?php echo get_template_directory_uri()?>/img/close.svg" alt="close">
            </button>
        </div>
    </div>
    <div class="popup__wrap">
        <div class="slick-slider gallery-slider gall2">

        <?php if(get_field('gall_2_galleria')): ?>\
                <?php foreach(get_field('gall_2_galleria') as $key=>$imgurl): ?>

                    <div id="photo<?php echo $key; ?>" class="slide">
                        <div class="slide-box">
                            <img src="<?php echo $imgurl ?>" alt="image">
                        </div>
                    </div>

                <?php endforeach; ?>

        <?php endif; ?>
            
        </div>
    </div>
</div>


<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>

<script>
    var TMPDIR = '<?php echo get_template_directory_uri() ?>';
</script>

<script src="<?php echo get_template_directory_uri() ?>/js/single-progetti.js"></script>


<?php get_footer(); ?>