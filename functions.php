<?php
add_theme_support('menus');

add_theme_support( 'title-tag' );

show_admin_bar(false);

add_theme_support( 'post-thumbnails' );

add_editor_style();

//load scripts
function my_scripts() {
    if(!is_admin()) {
        wp_enqueue_style( 'style.css', get_stylesheet_uri() );
        wp_enqueue_script('jquery3', 'https://code.jquery.com/jquery-3.6.1.js');
        wp_enqueue_script('jquery-parallax', get_template_directory_uri() . '/js/jquery-parallax.js');
        wp_enqueue_script('main', get_template_directory_uri() . '/js/main.js');
        wp_enqueue_script('slick', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js');
        wp_enqueue_script('wow', 'https://s3-us-west-2.amazonaws.com/s.cdpn.io/323909/wow.js');
        wp_enqueue_script('fixedElemScroll', get_template_directory_uri() . '/js/fixedElemScroll.jquery.js', array('jquery3'));
    }
}
add_action( 'init', 'my_scripts' );

function remove_wordpress_version_number() {
    return '';
}
add_filter('the_generator', 'remove_wordpress_version_number');
function remove_version_from_scripts( $src ) {
   if ( strpos( $src, '?ver=' ) )
       $src = remove_query_arg( 'ver', $src );
   return $src;
}
add_filter( 'style_loader_src', 'remove_version_from_scripts');
add_filter( 'script_loader_src', 'remove_version_from_scripts');


// Add Menu
function register_my_menus() {
    register_nav_menus(
        array(
            'header-menu' => __( 'Header menu' )
        )
    );
}
add_action( 'init', 'register_my_menus' );

//allow files type
function cc_mime_types($mimes) {
    $mimes['svg'] = 'image/svg+xml'; 
    return $mimes;
  }
  add_filter('upload_mimes', 'cc_mime_types'); 


/**
 *
 * Cpt Progetti
 *
 */
function create_projects() {
    register_post_type('progetti', array(
        'labels' => array(
            'name'            => __( 'Progetti', 'theme-domain' ),
            'singular_name'   => __( 'Progetti', 'theme-domain'  ),
            'add_new'         => __( 'Aggiungi Progetto', 'theme-domain'  ),
            'add_new_item'    => __( 'Aggiungi Progetto', 'theme-domain'  ),
            'edit'            => __( 'Modifica Progetto', 'theme-domain'  ),
            'edit_item'       => __( 'Modifica Progetto', 'theme-domain'  ),
            'new_item'        => __( 'Nuovo Progetto', 'theme-domain'  ),
            'all_items'       => __( 'Tutti i Progetti', 'theme-domain'  ),
            'view'            => __( 'Vedi Progetto', 'theme-domain'  ),
            'view_item'       => __( 'Vedi Progetto', 'theme-domain'  ),
            'search_items'    => __( 'Cerca Progetto', 'theme-domain'  ),
            'not_found'       => __( 'Progetto Non Trovato', 'theme-domain'  ),
        ),
        'public' => true, // show in admin panel?
        'menu_position' => 5,
        'supports' => array( 'title'),
        'has_archive' => false,
        'capability_type' => 'post',
        'menu_icon'   => 'dashicons-archive',
        'rewrite' => array(
            'slug' => 'progetti',
        ),
    ));
}
add_action( 'init', 'create_projects' );

/**
 *
 * Taxonomy tipologie
 *
 */
add_action( 'init', 'create_oglasi_taxonomy', 0 );
function create_oglasi_taxonomy() {

    register_taxonomy( 'tipologie', array( 'progetti' ), array(
        'hierarchical'      => true,
        'labels'            => array(
            'name'                       => _x( 'Tipologie', 'Taxonomy General Name', 'text_domain' ),
            'singular_name'              => _x( 'Tipologia', 'Taxonomy Singular Name', 'text_domain' ),
            'menu_name'                  => __( 'Tipologie', 'text_domain' ),
            'all_items'                  => __( 'Tuttle Le Tipologie', 'text_domain' ),
            'parent_item'                => __( 'Kategoria Tipologia Genitore', 'text_domain' ),
            'parent_item_colon'          => __( 'Kategoria Tipologia Genitore:', 'text_domain' ),
            'new_item_name'              => __( 'Nuova Tipologia', 'text_domain' ),
            'add_new_item'               => __( 'Aggiungi Tipologia', 'text_domain' ),
            'edit_item'                  => __( 'Modifica Tipologia', 'text_domain' ),
            'update_item'                => __( 'Aggiorna', 'text_domain' ),
            'separate_items_with_commas' => __( 'Dividi Con Virgola', 'text_domain' ),
            'search_items'               => __( 'Cerca Tipologia', 'text_domain' ),
            'add_or_remove_items'        => __( 'Aggiungi o Elimina Tipologia', 'text_domain' ),
            'choose_from_most_used'      => __( 'Scegli la più usata', 'text_domain' ),
        ),
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'supports' => array( 'title' ),
        'rewrite'           => array( 'slug' => 'tipologie', 'hierarchical' => true )
    ));
};



add_action('acf/init', 'gattuso_theme_options');
function gattuso_theme_options() {
    if( function_exists('acf_add_options_page') ) {
		$option_page = acf_add_options_page(array(
			'page_title' 	=> 'Opzioni Tema Generali',
			'menu_title' 	=> 'Opzioni di Tema',
			'menu_slug' 	=> 'opzioni-tema-generali',
			'capability' 	=> 'edit_posts',
			'redirect' 	=> false
		));
	}
}

/**
 * hide editor in template files
 */
function g_hide_editor() {
    $post_id = $_GET['post'] ? $_GET['post'] : $_POST['post_ID'] ;
    if(!isset($post_id)) return;

    $template_file = get_post_meta($post_id, '_wp_page_template', true);
    //if($template_file == 'home.php' or 'azienda.php' or 'progetti.php' or 'blog.php'){
    if($template_file == 'home.php' or 'azienda.php'){
        remove_post_type_support('page', 'editor');
    }
}
add_action('admin_init', 'g_hide_editor');


/**
 * 
 * Load More Posts from Blog
 * 
 */
function load_more_posts() {
    $args = [
        'posts_per_page' => $_POST['postpage'],
        'orderby' => 'date',
        'order' => 'DESC',
        'paged' => $_POST['paged'],
        'post_status' => array('publish'),
        'category__not_in' => array( 1 ),
    ];

    if(isset($_POST['catIds']) ) {
        if(sizeof($_POST['catIds']) > 0) {
            $args['category__in'] = $_POST['catIds'];
        }
    }

    //var_dump($_POST['catIds']);
    $ajaxposts = new WP_Query($args);
  
    $response = '';
    $max_pages = $ajaxposts->max_num_pages;
  
    if($ajaxposts->have_posts()) {
        ob_start();
      while($ajaxposts->have_posts()) : $ajaxposts->the_post();
      
        get_template_part('parts/postcard');
  
      endwhile;
      
      $output = ob_get_contents();
      ob_end_clean();
    } else {
      $response = '';
    }
  
    $result = [
    'max' => $max_pages,
    'html' => $output,
    ];

    echo json_encode($result);
    exit;
}
add_action('wp_ajax_load_more_posts', 'load_more_posts');
add_action('wp_ajax_nopriv_load_more_posts', 'load_more_posts');


/**
 * 
 * Load More Posts Progetti
 * 
 */
function load_more_progetti() {
    $args = [
        'post_type' => 'progetti',
        'posts_per_page' => $_POST['postpage'],
        'orderby' => 'date',
        'order' => 'DESC',
        'paged' => $_POST['paged'],
        'post_status' => array('publish')    
    ];

    if(isset($_POST['meta_value'])) {
        if($_POST['meta_value'] == 'suisse') {
            $args['meta_key'] = 'nazionalita_progetto';
            $args['meta_value'] = 'Gattuso Suisse';
        }
        if($_POST['meta_value'] == 'italy') {
            $args['meta_key'] = 'nazionalita_progetto';
            $args['meta_value'] = 'Gattuso Italy';
        }
    }

   

    if(isset($_POST['catIds']) ) {
        if(sizeof($_POST['catIds']) > 0) {
                 $args['tax_query'] = array(
                    array([
                        'taxonomy'=>'tipologie',
                        'field'=>'term_id',
                        'terms'=>$_POST['catIds']
                    ]),
                );
            
        }
    }

    $ajaxposts = new WP_Query($args);
  
    $response = '';
    $max_pages = $ajaxposts->max_num_pages;
    $progetti = [];
  
    if($ajaxposts->have_posts()) {
        ob_start();
      while($ajaxposts->have_posts()) : $ajaxposts->the_post();
        //get progetti into array                    
        $progetto = [
            'post_title' => get_the_title(), 
            'url' => get_the_permalink(),
            'thumb_url' => get_field('cover_and_thumbnail_thumbnail', get_the_ID()),
            'parent_term_name' => $_POST['parent_term_name'] 
        ];

        array_push($progetti, $progetto);
      endwhile;

      get_template_part('parts/progettogroup', null, $progetti);
      


      $output = ob_get_contents();
      ob_end_clean();
    } else {
      $response = '';
    }
  
    $result = [
    'max' => $max_pages,
    'html' => $output,
    ];

    echo json_encode($result);
    exit;
}
add_action('wp_ajax_load_more_progetti', 'load_more_progetti');
add_action('wp_ajax_nopriv_load_more_progetti', 'load_more_progetti');


//add add_li_class to args of wp_nav_menu()
function add_additional_class_on_li($classes, $item, $args) {
    if(isset($args->add_li_class)) {
        $classes[] = $args->add_li_class;
    }
    return $classes;
}
add_filter('nav_menu_css_class', 'add_additional_class_on_li', 1, 3);


?>