<?php

//Adds dynamic title tag support
function fcc_theme_support(){
    add_theme_support('title-tag');
    add_theme_support('custom-logo');
    add_theme_support('post-thumbnails');
}

add_action('after_setup_theme',"fcc_theme_support");

function fcc_menus(){
    $locations = array(
    'primary' => 'Desktop Primary Left Sidebar',
    'footer' => 'Footer Menu Items'
    );

    register_nav_menus($locations);
}

add_action('init', 'fcc_menus');

function fcc_register_styles(){
    # good practice to start the function name with your name/brand etc, so it'd not conflict with wordpress functions

    $version = wp_get_theme()->get( 'Version' );

    wp_enqueue_style('followandrew-style', get_template_directory_uri() . "/style.css", array('followandrew-bootstrap'), $version, 'all');
    # the last ones: version, where to apply
    wp_enqueue_style('followandrew-bootstrap', "https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css", array(), '1.0', 'all');
    wp_enqueue_style('followandrew-fontawesome', "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css", array(), '1.0', 'all');
}


    add_action('wp_enqueue_scripts', 'fcc_register_styles');


    function fcc_register_scripts(){
    
        wp_enqueue_script('followandrew-jquery', "https://code.jquery.com/jquery-3.4.1.slim.min.js", array(), "3.4.1", True);
        wp_enqueue_script('followandrew-popper', "https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js", array(), "1.16.0", True);
        wp_enqueue_script('followandrew-bootstrap', "https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js", array(), "3.4.1", True);
        wp_enqueue_style('followandrew-main', get_template_directory_uri() . "assets/main.js", array('followandrew-bootstrap'), "1.0", 'all');
    }
    
    
        add_action('wp_enqueue_scripts', 'fcc_register_styles');


    #this function was not in the tutorial but it's fun, counts the number of words in the post, it can later be used for the average read time
    // function prefix_wcount(){
    //     ob_start();
    //     the_content();
    //     $content = ob_get_clean();
    //     return sizeof(explode(" ", $content));
    // }

    function fcc_widget_areas(){
        register_sidebar(
            array(
                'before_title' => '<h2>',
                'after_title' => '</h2>',
                'before_widget' => '<ul class="social-list list-inline py-3 mx-auto">',
                'after_widget' => '</ul>',
                'name' => 'Sidebar Area',
                'id' => 'sidebar-1',
                'description' => 'sidebar widget area'
            )
            );

            register_sidebar(
                array(
                    'before_title' => '',
                    'after_title' => '',
                    'before_widget' => '',
                    'after_widget' => '',
                    'name' => 'Footer Area',
                    'id' => 'footer-1',
                    'description' => 'footer widget area'
                )
                );
    }

    add_action( 'widgets_init', 'fcc_widget_areas' );

?>