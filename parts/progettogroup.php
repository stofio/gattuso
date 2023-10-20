<?php $progetti = $args; ?>

<div class="row-first">
    <?php if($progetti[0]) : ?>
    <div class="col">
        <a href="<?php echo $progetti[0]['url'] ?>" class="project-box">
            <div class="project-box__img" style="background-image: url(<?php echo $progetti[0]['thumb_url'] ?>);">
                <h3 class="project-box__cat"><?php _e('Visualizza'); ?></h3>
            </div>
            <div class="project-box__info">
                <h3 class="project-box__title"><?php echo $progetti[0]['post_title'] ?></h3>
                <p class="project-box__subtitle"><?php echo $progetti[0]['parent_term_name'] ?></p>
            </div>
        </a>
    </div>
    <?php endif; ?>
    <?php if($progetti[1]) : ?>
    <div class="col">
        <a href="<?php echo $progetti[1]['url'] ?>" class="project-box">
            <div class="project-box__img" style="background-image: url(<?php echo $progetti[1]['thumb_url'] ?>);">
                <h3 class="project-box__cat"><?php _e('Visualizza'); ?></h3>
            </div>
            <div class="project-box__info">
                <h3 class="project-box__title"><?php echo $progetti[1]['post_title'] ?></h3>
                <p class="project-box__subtitle"><?php echo $progetti[1]['parent_term_name'] ?></p>
            </div>
        </a>
    </div>
    <?php endif; ?>
    <?php if($progetti[2]) : ?>
    <div class="col">
        <a href="<?php echo $progetti[2]['url'] ?>" class="project-box">
            <div class="project-box__img" style="background-image: url(<?php echo $progetti[2]['thumb_url'] ?>);">
                <h3 class="project-box__cat"><?php _e('Visualizza'); ?></h3>
            </div>
            <div class="project-box__info">
                <h3 class="project-box__title"><?php echo $progetti[2]['post_title'] ?></h3>
                <p class="project-box__subtitle"><?php echo $progetti[2]['parent_term_name'] ?></p>
            </div>
        </a>
    </div>
    <?php endif; ?>
</div>
<div class="row">
    <?php if($progetti[3]) : ?>
    <div class="col col01">
        <a href="<?php echo $progetti[3]['url'] ?>" class="project-box">
            <div class="project-box__img" style="background-image: url(<?php echo $progetti[3]['thumb_url'] ?>);">
                <h3 class="project-box__cat"><?php _e('Visualizza'); ?></h3>
            </div>
            <div class="project-box__info">
                <h3 class="project-box__title"><?php echo $progetti[3]['post_title'] ?></h3>
                <p class="project-box__subtitle"><?php echo $progetti[3]['parent_term_name'] ?></p>
            </div>
        </a>
    </div>
    <?php endif; ?>
    <?php if($progetti[4]) : ?>
    <div class="col col02">
        <a href="<?php echo $progetti[4]['url'] ?>" class="project-box">
            <div class="project-box__img" style="background-image: url(<?php echo $progetti[4]['thumb_url'] ?>);">
                <h3 class="project-box__cat"><?php _e('Visualizza'); ?></h3>
            </div>
            <div class="project-box__info">
                <h3 class="project-box__title"><?php echo $progetti[4]['post_title'] ?></h3>
                <p class="project-box__subtitle"><?php echo $progetti[4]['parent_term_name'] ?></p>
            </div>
        </a>
    </div>
    <?php endif; ?>
</div>
<div class="row">
    <?php if($progetti[5]) : ?>
    <div class="col col01">
        <a href="<?php echo $progetti[5]['url'] ?>" class="project-box">
            <div class="project-box__img" style="background-image: url(<?php echo $progetti[5]['thumb_url'] ?>);">
                <h3 class="project-box__cat"><?php _e('Visualizza'); ?></h3>
            </div>
            <div class="project-box__info">
                <h3 class="project-box__title"><?php echo $progetti[5]['post_title'] ?></h3>
                <p class="project-box__subtitle"><?php echo $progetti[5]['parent_term_name'] ?></p>
            </div>
        </a>
    </div>
    <?php endif; ?>
    <?php if($progetti[6]) : ?>
    <div class="col col02">
        <a href="<?php echo $progetti[6]['url'] ?>" class="project-box">
            <div class="project-box__img" style="background-image: url(<?php echo $progetti[6]['thumb_url'] ?>);">
                <h3 class="project-box__cat"><?php _e('Visualizza'); ?></h3>
            </div>
            <div class="project-box__info">
                <h3 class="project-box__title"><?php echo $progetti[6]['post_title'] ?></h3>
                <p class="project-box__subtitle"><?php echo $progetti[6]['parent_term_name'] ?></p>
            </div>
        </a>
    </div>
    <?php endif; ?>
</div>