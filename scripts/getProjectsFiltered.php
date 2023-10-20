<?php

include_once '../../../../wp-load.php';
global $wpdb;

$childrenIds = $_POST['childrenIds'];
$parentId = $_POST['parentId'];


$taxonomy = 'tipologie'; 
$terms = get_terms($taxonomy);
$args = array(
    'post_type' => 'progetti',
    'tax_query' => array(
        array(
            'taxonomy' => 'tipologie',
            'field' => 'id',
            'terms' => $childrenIds
        )
    )
);

$my_query = new WP_Query( $args );


//put posts in array
$postsResult = [];
if($my_query->have_posts()) { 
    
    while ($my_query->have_posts()) {
        $my_query->the_post(); 
        
        $post = [
            'post_title' => get_the_title(), 
            'url' => get_the_permalink()
        ];
        
        array_push($postsResult, $post);
    }
    
}
wp_reset_postdata();



$numPosts = sizeof($postsResult);

//number of container (7 posts)
if ($numPosts > 7) {
    $numContainer = floor($numPosts / 7);
} else {
    $numContainer = 1;
}


$o = 0;
for ($i = $numContainer; $i > 0; $i--) { 

    $iteration = $numPosts / $i;
    
    ?>


<div class="container">

    <div class="row-first">
        <?php if($iteration > 0): ?>
        <div class="col">
            <a href="" class="project-box">
                <div class="project-box__img" style="background-image: url(img/projects/project01.jpg);">
                    <h3 class="project-box__cat">Visualizza</h3>
                </div>
                <div class="project-box__info">
                    <h3 class="project-box__title"><?php echo $postsResult[0]['post_title']; ?></h3>
                    <p class="project-box__subtitle">Residenze</p>
                </div>
            </a>
        </div>
        <?php endif; ?>
        <?php if($iteration > 1): ?>
        <div class="col">
            <a href="" class="project-box">
                <div class="project-box__img" style="background-image: url(img/projects/project02.jpg);">
                    <h3 class="project-box__cat">Visualizza</h3>
                </div>
                <div class="project-box__info">
                    <h3 class="project-box__title"><?php echo $postsResult[1]['post_title']; ?></h3>
                    <p class="project-box__subtitle">Residenze</p>
                </div>
            </a>
        </div>
        <?php endif; ?>
        <?php if($iteration > 2): ?>
        <div class="col">
            <a href="" class="project-box">
                <div class="project-box__img" style="background-image: url(img/projects/project03.jpg);">
                    <h3 class="project-box__cat">Visualizza</h3>
                </div>
                <div class="project-box__info">
                    <h3 class="project-box__title"><?php echo $postsResult[2]['post_title']; ?></h3>
                    <p class="project-box__subtitle">Residenze</p>
                </div>
            </a>
        </div>
        <?php endif; ?>
    </div>


    <div class="row">
        <?php if($iteration > 3): ?>
        <div class="col col01">
            <a href="" class="project-box">
                <div class="project-box__img" style="background-image: url(img/projects/project04.jpg);">
                    <h3 class="project-box__cat">Visualizza</h3>
                </div>
                <div class="project-box__info">
                    <h3 class="project-box__title"><?php echo $postsResult[3]['post_title']; ?></h3>
                    <p class="project-box__subtitle">Residenze</p>
                </div>
            </a>
        </div>
        <?php endif; ?>
        <?php if($iteration > 4): ?>
        <div class="col col02">
            <a href="" class="project-box">
                <div class="project-box__img" style="background-image: url(img/projects/project05.jpg);">
                    <h3 class="project-box__cat">Visualizza</h3>
                </div>
                <div class="project-box__info">
                    <h3 class="project-box__title"><?php echo $postsResult[4]['post_title']; ?></h3>
                    <p class="project-box__subtitle">Residenze</p>
                </div>
            </a>
        </div>
        <?php endif; ?>
    </div>


    <div class="row">
        <?php if($iteration > 5): ?>
        <div class="col col01">
            <a href="" class="project-box">
                <div class="project-box__img" style="background-image: url(img/projects/project07.jpg);">
                    <h3 class="project-box__cat">Visualizza</h3>
                </div>
                <div class="project-box__info">
                    <h3 class="project-box__title"><?php echo $postsResult[5]['post_title']; ?></h3>
                    <p class="project-box__subtitle">Residenze</p>
                </div>
            </a>
        </div>
        <?php endif; ?>
        <?php if($iteration > 6): ?>
        <div class="col col02">
            <a href="" class="project-box">
                <div class="project-box__img" style="background-image: url(img/projects/project08.jpg);">
                    <h3 class="project-box__cat">Visualizza</h3>
                </div>
                <div class="project-box__info">
                    <h3 class="project-box__title"><?php echo $postsResult[6]['post_title']; ?></h3>
                    <p class="project-box__subtitle">Residenze</p>
                </div>
            </a>
        </div>
        <?php endif; ?>
    </div>

</div>

<?php
    $o++;
}




//header('Content-type: application/json');
//echo json_encode($postsResult, JSON_NUMERIC_CHECK);


?>