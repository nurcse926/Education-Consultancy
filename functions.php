
<?php

function dms(){
add_theme_support('title-tag');
add_theme_support('custom-background');
add_theme_support('post-thumbnails');
add_theme_support('automatic-feed-links');
load_theme_textdomain('dmseducation', get_template_directory_uri().'/languages');

if(function_exists('register_nav_menu')){
	register_nav_menu('main-menu', __('Main Menu','dmseducation'));
}



function read_more($word) {
        $post_content = explode(" ", get_the_content());
        $slice_content = array_slice($post_content, '40', $word);
        echo implode(" ", $slice_content);
    }

register_post_type('dmsltd_home_slider', array(
        'labels' => array(
            'name' => 'Home->slider',
            'add_new_item' => 'Add New slide',
        ),
        'public' => true,
        'supports' => array('title','thumbnail')
    ));

register_post_type('dmsltd_home_about', array(
        'labels' => array(
            'name' => 'Home->about',
            'add_new_item' => 'Add New home',
        ),
        'public' => true,
        'supports' => array('title', 'editor', 'thumbnail')
    ));

    register_post_type('dmsltd_blog', array(
        'labels' => array(
            'name' => 'Home->Blog',
            'add_new_item' => 'Add New blog box',
        ),
        'public' => true,
        'supports' => array('title', 'editor', 'thumbnail')
    ));
    register_post_type('dmsltd_services', array(
        'labels' => array(
            'name' => 'Home->Services',
            'add_new_item' => 'Add New Services',
        ),
        'public' => true,
        'supports' => array('title', 'editor', 'thumbnail')
    ));
    register_post_type('dmsltd_testimony', array(
        'labels' => array(
            'name' => 'Home->Testimony',
            'add_new_item' => 'Add New Testimonial',
        ),
        'public' => true,
        'supports' => array('title', 'editor', 'thumbnail')
    ));
    register_post_type('dmsltd_country_list', array(
        'labels' => array(
            'name' => 'Country->list',
            'add_new_item' => 'Add New country',
        ),
        'public' => true,
        'supports' => array('title','thumbnail')
    ));
    register_post_type('dmsltd_study_in_usa', array(
        'labels' => array(
            'name' => 'study->usa',
            'add_new_item' => 'Add New Country-',
        ),
        'public' => true,
        'supports' => array('title', 'editor', 'thumbnail')
    ));

  register_post_type('dmsltd_study_canada', array(
        'labels' => array(
            'name' => 'study->canada',
            'add_new_item' => 'Add New country',
        ),
        'public' => true,
        'supports' => array('title', 'editor','thumbnail')
    ));

 register_post_type('dmsltd_study_japan', array(
        'labels' => array(
            'name' => 'study->japan',
            // 'add_new_item' => 'Add New country ',
        ),
        'public' => true,
        'supports' => array('title', 'editor', 'thumbnail')
    ));

register_post_type('dmsltd_study_sweden', array(
        'labels' => array(
            'name' => 'study->sweden',
            'add_new_item' => 'Add New country',
        ),
        'public' => true,
        'supports' => array('title', 'editor','thumbnail')
    ));
    register_post_type('dmsltd_malaysia', array(
        'labels' => array(
            'name' => 'study->malaysia',
            'add_new_item' => 'Add New country',
        ),
        'public' => true,
        'supports' => array('title', 'editor','thumbnail')
    ));

}
add_action('after_setup_theme','dms');

require_once('lib/ReduxCore/framework.php');
require_once('lib/sample/config.php');
