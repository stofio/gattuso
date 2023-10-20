<div class="col more-item wow fadeInUp">
    <div class="blog-item">
        <div class="blog-item__img" style="background-image: url(<?php the_post_thumbnail_url() ?>)"></div>
        <div class="blog-item__info">
            <h3 class="blog-item__title"><?php the_title() ?></h3>
            <p class="blog-item__text"><?php the_excerpt() ?></p>
            <a href="<?php the_permalink() ?>" class="btn-line"><?php _e('Leggi tutto'); ?> ></a>
        </div>
    </div>
</div>