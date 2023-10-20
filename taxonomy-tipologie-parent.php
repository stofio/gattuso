<?php
/*
Taxonomy Tipologia Parent
*/

//get current taxonomy
$term = get_queried_object(); 
$postPerPage = 7;

$args = [
    'post_type' => 'progetti',
    'posts_per_page' => $postPerPage,
    'orderby' => 'date',
    'order' => 'DESC',
    'paged' => 1,
    'post_status' => array('publish'),
    'tax_query' => array(
        array(
        'taxonomy' => 'tipologie',
        'field' => 'term_id',
        'terms' => $term->term_id
         )
      )
];

if(isset($_GET['n'])) {
    if($_GET['n'] == 'suisse') {
        $args['meta_key'] = 'nazionalita_progetto';
        $args['meta_value'] = 'Gattuso Suisse';
    }
    if($_GET['n'] == 'italy') {
        $args['meta_key'] = 'nazionalita_progetto';
        $args['meta_value'] = 'Gattuso Italy';
    }
}


$posts = new WP_Query($args);

$progetti = [];

?>

<div class="page page-category">

    <section class="page-head page-head_light">
        <div class="container">
            <div class="row">
                <div class="fixed-title">
                    <h1 class="title s1"><?php echo $term->name ?></h1>
                    <input type="hidden" class="currentTermId" value="<?php echo $term->term_id ?>" />
                    <div class="filter">
                        <?php //get child taxonomies
                        $children = get_terms( $term->taxonomy, array(
                            'parent'    => $term->term_id,
                            'hide_empty' => true
                        ) );  
                        if ( $children ) :
                        ?>
                        <div class="filter__title"><?php _e('Filtra per:'); ?></div>
                        <ul class="filter__list">
                            <?php
                                foreach( $children as $subcat ):
                            ?>
                            <li class="filter__item">
                                <a href="javascript:;" data-termid="<?php echo $subcat->term_id; ?>"
                                    class="filter__link">
                                    <?php echo $subcat->name; ?>
                                </a>
                            </li>
                            <?php
                                    endforeach;
                            endif;
                            ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <?php //display projects ?>

    <div class="projects-items">
        <div class="container projects-container">
            <?php if($posts->have_posts()): ?>
            <?php 
                    while ($posts->have_posts()): 
                        $posts->the_post();
                   
                        //get progetti into array                    
                        $progetto = [
                            'post_title' => get_the_title(), 
                            'url' => get_the_permalink(),
                            'thumb_url' => get_field('cover_and_thumbnail_thumbnail', get_the_ID()),
                            'parent_term_name' => get_queried_object()->name 
                        ];
                        
                        array_push($progetti, $progetto);

                        ?>
            <?php endwhile; ?>
            <?php endif; ?>
            <?php wp_reset_postdata(); ?>

            <?php
            $numPosts = sizeof($progetti);

            get_template_part('parts/progettogroup', null, $progetti);
            
            
        ?>
        </div>

        <?php if($posts->found_posts > $postPerPage) : ?>
        <div class="btn-more wow fadeInUp">
            <a href="javascript:;" id="load-more"
                class="btn-line btn-line_white"><?php _e('Carica più Contenuti +'); ?></a>
        </div>
        <?php endif; ?>
    </div>


</div>


<script>
THEME_DIR = "<?php echo get_stylesheet_directory_uri() ?>";
</script>

<script>
$(document).ready(function() {
    fixMargins();
});

let currentPage = 1;
$('#load-more').on('click', function() {
    currentPage++; // Do currentPage + 1, because we want to load the next page

    var activatedFilters = [];
    var parentId = $('.currentTermId').val();
    //get activated filter
    $('.filter__item a').each((key, value) => {
        if ($(value).hasClass('active')) {
            termId = $(value).attr('data-termid');
            activatedFilters.push(termId * 1);
        }
    });

    //if no filter, get all posts
    if (activatedFilters.length == 0) {
        //get all ids
        activatedFilters.push(<?php echo $term->term_id ?> * 1);
    }

    $.ajax({
        type: 'POST',
        url: '<?php echo admin_url('admin-ajax.php'); ?>',
        dataType: 'json',
        data: {
            action: 'load_more_progetti',
            paged: currentPage,
            catIds: activatedFilters,
            postpage: <?php echo $postPerPage ?>,
            parent_term_name: '<?php echo get_queried_object()->name ?>',
            meta_value: '<?php echo $_GET['n'] ?>'
        },
        success: function(res) {
            console.log(res)
            if (currentPage >= res.max) {
                $('#load-more').hide();
            }
            $('.projects-container').append(res.html);
            fixMargins();
        }
    });
});

$('.filter__item a').on('click', (e) => {
    e.preventDefault();

    if ($(e.target).hasClass('active')) {
        deactivateFilterItem(e);
    } else {
        activateFilterItem(e);
    }

});

function deactivateFilterItem(e) {
    $(e.target).removeClass('active');
    loadProjects();
}


function activateFilterItem(e) {
    $(e.target).addClass('active');
    loadProjects();
}

function fixMargins() {
    $.each($('.projects-items').find('.row'), (i, k) => {
        if (!$.trim($(k).html()).length) { //if is empty
            $(k).remove();
        }
    });

    if ($('.row-first:first-child > .col').length < 3) {
        $('.row-first:first-child').css('margin-top', '-100px');
    }
}

function loadProjects() {
    //empyt container
    $('.projects-container').empty();

    //block buttons
    $('.filter__list').css('pointer-events', 'none');

    //start page 1 
    $('#load-more').show();

    currentPage = 1;

    var activatedFilters = [];
    var parentId = $('.currentTermId').val();
    //get activated filter
    $('.filter__item a').each((key, value) => {
        if ($(value).hasClass('active')) {
            termId = $(value).attr('data-termid');
            activatedFilters.push(termId * 1);
        }
    });

    //if no filter, get all posts
    if (activatedFilters.length == 0) {
        //get all ids
        activatedFilters.push(<?php echo $term->term_id ?> * 1);
    }

    $.ajax({
        type: 'POST',
        url: '<?php echo admin_url('admin-ajax.php'); ?>',
        dataType: 'json',
        data: {
            action: 'load_more_progetti',
            paged: currentPage,
            catIds: activatedFilters,
            postpage: <?php echo $postPerPage ?>,
            parent_term_name: '<?php echo get_queried_object()->name ?>',
            meta_value: '<?php echo $_GET['n'] ?>'
        },
        success: function(res) {
            if (currentPage >= res.max) {
                $('#load-more').hide();
            }
            $('.projects-container').append(res.html);
            fixMargins();

            //enable buttons
            $('.filter__list').css('pointer-events', 'auto');
        }
    });
}
</script>