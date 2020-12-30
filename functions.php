<?php 

//adding css
function load_stylesheets(){


     wp_enqueue_style('stylesheet', get_template_directory_uri() . '/css/style.css', array(), false, 'all');

     wp_enqueue_style('stylesheet', get_template_directory_uri() . '/scss/main.scss', array(), false, 'all');

    wp_enqueue_style('responsive', get_stylesheet_directory_uri() . '/css/responsive.css', array(), false, 'all');

  

    // wp_enqueue_style('owlcarousel', get_stylesheet_directory_uri() . '/owlcarousel/owl.carousel.min.css', array(), false, 'all');
    
    // wp_enqueue_style('owlcarousel', get_stylesheet_directory_uri() . '/owlcarousel/owl.theme.default.min.css', array(), false, 'all');
    
}

add_action('wp_enqueue_scripts','load_stylesheets');




//adding javascript
function addjs(){

    // wp_enqueue_script('owlcarousel', get_template_directory_uri() . '/javascript/owlcarousel/owl.carousel.min.js',  array(), '1.0.0', true); 

    wp_enqueue_script('script', get_template_directory_uri() . '/js/javascript.js',  array(), '1.0.0', true); 

   

     
}

add_action('wp_enqueue_scripts','addjs');


require get_template_directory() . '/includes/customizer.php';





//Theme Option
add_theme_support('menus');
add_theme_support('post-thumbnails');



function register_my_menus() {
    register_nav_menus(
    array(
    
        'Main_menu' => __( 'Main_menu' ),
        'Dropdown_menu' => __( 'Dropdown_menu' ),
     )
     );
    }
    add_action( 'init', 'register_my_menus' );


    

        function custom_post_types(){
            $args = array(
                    'labels' => array(
                        'name' => ' Why Choose US',
                        'singular_name' => 'choose'
                    ),
                    'hierarchical' => true,
                    'public' => true,
                    'has_archive' => true,

                    'menu_icon'   => 'dashicons-star-half',
                    
                    
                    
                    'supports' => array('title' , 'thumbnail', 'custom-fields'),
                    'menu_position' => 4,
            
                );
            
                register_post_type('choose',$args);


                $args = array(
                    'labels' => array(
                        'name' => ' Testimonials',
                        'singular_name' => 'testimonial'
                    ),
                    'hierarchical' => true,
                    'public' => true,
                    'has_archive' => true,
                    'menu_icon'   => 'dashicons-businessman',
                   
                    
                    
                    'supports' => array('title', 'editor', 'thumbnail', 'custom-fields'),
                    'menu_position' => 4,
            
                );
            
                register_post_type('testimonial',$args);


                $args = array(
                    'labels' => array(
                        'name' => ' Teams',
                        'singular_name' => 'team'
                    ),
                    'hierarchical' => true,
                    'public' => true,
                    'has_archive' => true,
                    'menu_icon'   => 'dashicons-buddicons-buddypress-logo
                    ',
                    
                    
                    'supports' => array('title', 'editor', 'thumbnail', 'custom-fields','comments'),
                    'menu_position' => 4,
            
                );
            
                register_post_type('team',$args);



                // $args = array(
                //     'labels' => array(
                //         'name' => ' Plans',
                //         'singular_name' => 'plan'
                //     ),
                //     'hierarchical' => true,
                //     'public' => true,
                //     'has_archive' => true,
                //     'menu_icon'   => 'dashicons-editor-help',
                    
                    
                //     'supports' => array('title', 'editor', 'excerpt', 'thumbnail', 'custom-fields',),
                //     'menu_position' => 4,
            
                // );
            
                // register_post_type('plan',$args);






$args = array(
    'labels' => array(
        'name' => ' Pricing',
        'singular_name' => 'pricing'
    ),
    'hierarchical' => true,
    'public' => true,
    'has_archive' => true,
    
    'menu_icon'   => 'dashicons-tickets-alt',
    
    'supports' => array('title', 'thumbnail', 'custom-fields',),
    'menu_position' => 4,

);

register_post_type('pricing',$args);
}

   




    


add_action('init','custom_post_types');
