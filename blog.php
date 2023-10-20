<?php 
/*
Template Name: Blog
*/
get_header('black'); 
?>

<?php 
$postPerPage = 4;
$posts = new WP_Query([
  'posts_per_page' => $postPerPage,
  'orderby' => 'date',
  'order' => 'DESC',
  'paged' => 1,
  'post_status' => array('publish'),
  'category__not_in' => array( 44 ),
]);

?>


<div class="page page-blog" style="padding-bottom: 150px">

    <section class="page-head page-head_light wow fadeIn">
        <div class="container">
            <div class="row">
                <h1 class="title s1"><?php _e('Blog'); ?></h1>
                <div class="filter">
                    <div class="filter__title"><?php _e('Filtra per:'); ?></div>
                    <ul class="filter__list">
                        <?php
                        $categories = get_categories( array(
                            'hide_empty' => true,
                            'exclude' => array(1)
                            
                        ) );
                        foreach($categories as $category) : ?>
                        <li class="filter__item">
                            <a href="<?php echo get_category_link($category->term_id) ?>"
                                data-termid="<?php echo $category->term_id; ?>"
                                class="filter__link"><?php echo $category->name ?></a>
                        </li>
                        <?php
                        endforeach;
                        
                        ?>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <div class="blog">
        <div class="container">
            <div class="row">
                <?php if($posts->have_posts()): ?>
                <ul class="publication-list">
                    <?php 
                        while ($posts->have_posts()): $posts->the_post();
                        
                            get_template_part('parts/postcard');
                        
                        endwhile;
                        ?>
                </ul>
                <?php endif; ?>
                <?php wp_reset_postdata(); ?>


            </div>
            <?php if($posts->found_posts > $postPerPage) : ?>
            <div class="row btn-more wow fadeInUp">
                <a href="javascript:;" id="load-more"
                    class="btn-line btn-line_black"><?php _e('Carica più Contenuti'); ?> +</a>
            </div>
            <?php endif; ?>
        </div>
    </div>

</div>
<script>
THEME_DIR = "<?php echo get_stylesheet_directory_uri() ?>";
</script>

<script>
var theme_dir = THEME_DIR;


let currentPage = 1;
$('#load-more').on('click', function() {
    currentPage++; // Do currentPage + 1, because we want to load the next page

    $.ajax({
        type: 'POST',
        url: '<?php echo admin_url('admin-ajax.php'); ?>',
        dataType: 'json',
        data: {
            action: 'load_more_posts',
            paged: currentPage,
            postpage: <?php echo $postPerPage ?>
        },
        success: function(res) {
            if (currentPage >= res.max) {
                $('#load-more').hide();
            }
            $('.publication-list').append(res.html);
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

function loadProjects() {
    //empyt container
    $('.publication-list').empty();

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
        $('.filter__item a').each((key, value) => {
            termId = $(value).attr('data-termid');
            activatedFilters = [];
        });
    }


    $.ajax({
        type: 'POST',
        url: '<?php echo admin_url('admin-ajax.php'); ?>',
        dataType: 'json',
        data: {
            action: 'load_more_posts',
            paged: currentPage,
            catIds: activatedFilters,
            postpage: <?php echo $postPerPage ?>
        },
        success: function(res) {
            if (currentPage >= res.max) {
                $('#load-more').hide();
            }
            $('.publication-list').append(res.html);

            //enable buttons
            $('.filter__list').css('pointer-events', 'auto');
        }
    });
}
</script>



<?php get_footer(); ?>