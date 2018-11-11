<?php

/**
 * ReduxFramework Sample Config File
 * For full documentation, please visit: http://docs.reduxframework.com/
 */
if (!class_exists('Redux')) {
    return;
}


// This is your option name where all the Redux data is stored.
$opt_name = "dmseducation";

// This line is only for altering the demo. Can be easily removed.
$opt_name = apply_filters('redux_demo/opt_name', $opt_name);

/*
 *
 * --> Used within different fields. Simply examples. Search for ACTUAL DECLARATION for field examples
 *
 */

$sampleHTML = '';
if (file_exists(dirname(__FILE__) . '/info-html.html')) {
    Redux_Functions::initWpFilesystem();

    global $wp_filesystem;

    $sampleHTML = $wp_filesystem->get_contents(dirname(__FILE__) . '/info-html.html');
}

// Background Patterns Reader
$sample_patterns_path = ReduxFramework::$_dir . '../sample/patterns/';
$sample_patterns_url = ReduxFramework::$_url . '../sample/patterns/';
$sample_patterns = array();

if (is_dir($sample_patterns_path)) {

    if ($sample_patterns_dir = opendir($sample_patterns_path)) {
        $sample_patterns = array();

        while (( $sample_patterns_file = readdir($sample_patterns_dir) ) !== false) {

            if (stristr($sample_patterns_file, '.png') !== false || stristr($sample_patterns_file, '.jpg') !== false) {
                $name = explode('.', $sample_patterns_file);
                $name = str_replace('.' . end($name), '', $sample_patterns_file);
                $sample_patterns[] = array(
                    'alt' => $name,
                    'img' => $sample_patterns_url . $sample_patterns_file
                );
            }
        }
    }
}

/**
 * ---> SET ARGUMENTS
 * All the possible arguments for Redux.
 * For full documentation on arguments, please refer to: https://github.com/ReduxFramework/ReduxFramework/wiki/Arguments
 * */
$theme = wp_get_theme(); // For use with some settings. Not necessary.

$args = array(
    // TYPICAL -> Change these values as you need/desire
    'opt_name' => $opt_name,
    // This is where your data is stored in the database and also becomes your global variable name.
    'display_name' => $theme->get('Name'),
    // Name that appears at the top of your panel
    'display_version' => $theme->get('Version'),
    // Version that appears at the top of your panel
    'menu_type' => 'menu',
    //Specify if the admin menu should appear or not. Options: menu or submenu (Under appearance only)
    'allow_sub_menu' => true,
    // Show the sections below the admin menu item or not
    'menu_title' => __('DMS EDUCATION Options', 'redux-framework-demo'),
    'page_title' => __('DMS EDUCATION', 'redux-framework-demo'),
    // You will need to generate a Google API key to use this feature.
    // Please visit: https://developers.google.com/fonts/docs/developer_api#Auth
    'google_api_key' => '',
    // Set it you want google fonts to update weekly. A google_api_key value is required.
    'google_update_weekly' => false,
    // Must be defined to add google fonts to the typography module
    'async_typography' => true,
    // Use a asynchronous font on the front end or font string
    //'disable_google_fonts_link' => true,                    // Disable this in case you want to create your own google fonts loader
    'admin_bar' => true,
    // Show the panel pages on the admin bar
    'admin_bar_icon' => 'dashicons-portfolio',
    // Choose an icon for the admin bar menu
    'admin_bar_priority' => 50,
    // Choose an priority for the admin bar menu
    'global_variable' => '',
    // Set a different name for your global variable other than the opt_name
    'dev_mode' => false,
    // Show the time the page took to load, etc
    'update_notice' => false,
    // If dev_mode is enabled, will notify developer of updated versions available in the GitHub Repo
    'customizer' => true,
    // Enable basic customizer support
    //'open_expanded'     => true,                    // Allow you to start the panel in an expanded way initially.
    //'disable_save_warn' => true,                    // Disable the save warning when a user changes a field
    // OPTIONAL -> Give you extra features
    'page_priority' => null,
    // Order where the menu appears in the admin area. If there is any conflict, something will not show. Warning.
    'page_parent' => 'themes.php',
    // For a full list of options, visit: http://codex.wordpress.org/Function_Reference/add_submenu_page#Parameters
    'page_permissions' => 'manage_options',
    // Permissions needed to access the options panel.
    'menu_icon' => '',
    // Specify a custom URL to an icon
    'last_tab' => '',
    // Force your panel to always open to a specific tab (by id)
    'page_icon' => 'icon-themes',
    // Icon displayed in the admin panel next to your menu_title
    'page_slug' => '',
    // Page slug used to denote the panel, will be based off page title then menu title then opt_name if not provided
    'save_defaults' => true,
    // On load save the defaults to DB before user clicks save or not
    'default_show' => false,
    // If true, shows the default value next to each field that is not the default value.
    'default_mark' => '',
    // What to print by the field's title if the value shown is default. Suggested: *
    'show_import_export' => true,
    // Shows the Import/Export panel when not used as a field.
    // CAREFUL -> These options are for advanced use only
    'transient_time' => 60 * MINUTE_IN_SECONDS,
    'output' => true,
    // Global shut-off for dynamic CSS output by the framework. Will also disable google fonts output
    'output_tag' => true,
    // Allows dynamic CSS to be generated for customizer and google fonts, but stops the dynamic CSS from going to the head
    // 'footer_credit'     => '',                   // Disable the footer credit of Redux. Please leave if you can help it.
    // FUTURE -> Not in use yet, but reserved or partially implemented. Use at your own risk.
    'database' => '',
    // possible: options, theme_mods, theme_mods_expanded, transient. Not fully functional, warning!
    'use_cdn' => true,
    // If you prefer not to use the CDN for Select2, Ace Editor, and others, you may download the Redux Vendor Support plugin yourself and run locally or embed it in your code.
    // HINTS
    'hints' => array(
        'icon' => 'el el-question-sign',
        'icon_position' => 'right',
        'icon_color' => 'lightgray',
        'icon_size' => 'normal',
        'tip_style' => array(
            'color' => 'red',
            'shadow' => true,
            'rounded' => false,
            'style' => '',
        ),
        'tip_position' => array(
            'my' => 'top left',
            'at' => 'bottom right',
        ),
        'tip_effect' => array(
            'show' => array(
                'effect' => 'slide',
                'duration' => '500',
                'event' => 'mouseover',
            ),
            'hide' => array(
                'effect' => 'slide',
                'duration' => '500',
                'event' => 'click mouseleave',
            ),
        ),
    )
);



// Panel Intro text -> before the form
if (!isset($args['global_variable']) || $args['global_variable'] !== false) {
    if (!empty($args['global_variable'])) {
        $v = $args['global_variable'];
    } else {
        $v = str_replace('-', '_', $args['opt_name']);
    }
    $args['intro_text'] = sprintf(__(''), $v);
} else {
    $args['intro_text'] = __('', 'redux-framework-demo');
}

// Add content after the form.
$args['footer_text'] = __('', 'redux-framework-demo');

Redux::setArgs($opt_name, $args);

/*
 * ---> END ARGUMENTS
 */


/*
 * ---> START HELP TABS
 */

$tabs = array(
    array(
        'id' => 'redux-help-tab-1',
        'title' => __('Theme Information 1', 'redux-framework-demo'),
        'content' => __('<p>This is the tab content, HTML is allowed.</p>', 'redux-framework-demo')
    ),
    array(
        'id' => 'redux-help-tab-2',
        'title' => __('Theme Information 2', 'redux-framework-demo'),
        'content' => __('<p>This is the tab content, HTML is allowed.</p>', 'redux-framework-demo')
    )
);
Redux::setHelpTab($opt_name, $tabs);

// Set the help sidebar
$content = __('<p>This is the sidebar content, HTML is allowed.</p>', 'redux-framework-demo');
Redux::setHelpSidebar($opt_name, $content);


/*
 * <--- END HELP TABS
 */


/*
 *
 * ---> START SECTIONS
 *
 */

/*

  As of Redux 3.5+, there is an extensive API. This API can be used in a mix/match mode allowing for


 */
// -> START header Sections
Redux::setSection($opt_name, array(
    'title' => __('Header Section', 'dmseducation'),
    'id' => 'head',
    'desc' => __('This is the header section to  customize', 'dmseducation'),
));

Redux::setSection($opt_name, array(
    'title' => __('Header Top', 'dmseducation'),
    'id' => 'head-top',
    'subsection' => 'true',
    'desc' => __('This is the header top to  customize', 'dmseducation'),
    'fields' => array(
        array(
            'title' => __('Switch header top ', 'dmseducation'),
            'desc' => __('Enable and disable header top section', 'dmseducation'),
            'id' => 'header_top_on_off',
            'type' => 'button_set',
            'options' => array(
                '1' => 'Enabled',
                '0' => 'Disabled',
            ),
            'default' => '1'
        ),

        array(
            'title' => __('Phone Number', 'dmseducation'),
            'id' => 'phone',
            'type' => 'text',
            'default' => '+13474767894',
        ),
        array(
            'title' => __('Email Address', 'dmseducation'),
            'id' => 'email',
            'type' => 'text',
            'validate' => 'email',
            'default' => 'info@digitalmarketingagencyllc.com',
        ),
        array(
            'title' => __('Office Hours', 'dmseducation'),
            'id' => 'hour',
            'type' => 'text',
            'default' => 'Mon. - Fri. 10:00 - 21:00',
        ),
        array(
            'title' => __('Follow  us', 'dmseducation'),
            'type' => 'info',
            'style' => 'success',
            'id' => 'info_success',
            'desc' => __('Set up your social links below.', 'dmseducation'),
        ),
        array(
            'title' => __('Facebook', 'dmseducation'),
            'id' => 'follow-fb',
            'type' => 'text',
            'validate' => 'url'
        ),
        array(
            'title' => __('Twitter', 'dmseducation'),
            'id' => 'follow-tw',
            'type' => 'text',
            'validate' => 'url'
        ),
        array(
            'title' => __('Google Plus', 'dmseducation'),
            'id' => 'follow-gp',
            'type' => 'text',
            'validate' => 'url'
        ),
        array(
            'title' => __('Youtube', 'dmseducation'),
            'id' => 'follow-yt',
            'type' => 'text',
            'validate' => 'url'
        ),
    )
));

Redux::setSection($opt_name, array(
    'title' => __('Logo', 'dmseducation'),
    'id' => 'logo',
    'subsection' => 'true',
    'desc' => __('This is the logo section to  customize', 'dmseducation'),
    'fields' => array(
        array(
            'title' => ' Logo',
            'id' => ' logo',
            'type' => 'media',
            'desc' => __('Change the logo', 'dmseducation'),
            'default' => array(
                'url' => get_template_directory_uri() . '/img/edu.png'
            ),
        ),
        array(
            'title' => __('Logo Title', 'dmseducation'),
            'id' => 'logo_title',
            'type' => 'text',
            'default' => 'Dms'
        ),
        array(
            'title' => __('Logo Subtitle', 'dmseducation'),
            'id' => 'logo_subtitle',
            'type' => 'text',
            'default' => 'DMS, Education Consultancy'
        ),
    )
));
// -> End Header Sections
// ->  Start Home Content Section
Redux::setSection($opt_name, array(
    'title' => __('Home Content', 'dmseducation'),
    'id' => 'home',
    'desc' => __('This is the section for home content to  customize', 'dmseducation'),
));
Redux::setSection($opt_name, array(
    'title' => __('Slider', 'dmseducation'),
    'id' => 'home_slider',
    'subsection' => 'true',
    'desc' => __('This is the slider section to  customize', 'dmseducation'),
    'fields' => array(
        array(
            'title' => 'Home Sliders',
            'id' => 'home_slider',
            'type' => 'slides',
            'desc' => __('Change the logo', 'dmseducation'),
            'placeholder' => array(
                'title' => 'Title',
                'subtitle' => 'Subtitle',
                'description' => 'Description...',
                'url' => 'Link-1',
                'url-1' => 'Link-2',
                'height' => '420',
                'width' => '1222'
            ),
        ),
    )
));

Redux::setSection($opt_name, array(
    'title' => __('About Us', 'dmseducation'),    
    'desc' => __('This is the section for about us', 'dmseducation'),
    'subsection' => 'true',
    'fields' => array(
        array(
            'title' => 'Company Logo',
            'id' => 'about_company_logo',
            'desc' => __('Change Logo', 'dmseducation'),
            "type" => 'media',
            'default' => array(
                'url' => get_template_directory_uri().'/img/edu.png'
            )
        ),

            array(
            'title' => __('about company', 'dmseducation'),
            'id' => 'about_company_single',
            'type' => 'textarea',
            'default' => 'Dms'
        ),
        
          ),  
));


Redux::setSection($opt_name, array(
    'title' => __('Blog', 'dmseducation'),
    'subsection' => 'true',
    'desc' => __('This is the section for home Blog to  customize', 'dmseducation'),
    'fields' => array(
        array(
            'title' => __('Blog', 'dmseducation'),
            'desc' => __('Enable and disable home Blog', 'dmseducation'),
            'id' => 'home_blog',
            'type' => 'button_set',
            'options' => array(
                '1' => 'Enabled',
                '0' => 'Disabled',
            ),
            'default' => '1'
        ),
        array(
            'title' => __('ADD blog', 'dmseducation'),
            'type' => 'info',
            'style' => 'success',
            'id' => 'info_success',
            'desc' => __('Set up blog below.', 'dmseducation'),
        ),
        array(
            'title' => 'Blog Image-1',
            'id' => 'blog_img_1',
            'type' => 'media',
            'desc' => __('Change the Image', 'dmseducation'),
            'default' => array(
                'url' => get_template_directory_uri() . '/img/DMS.jpg'
                
            ),
        ),

array(
            'title' => __('Title 1', 'dmseducation'),
            'id' => 'Blog_title 1',
            'type' => 'text',
        ),

array(
            'title' => 'blog Content 1',
            'id' => 'blog_content 1',
            'type' => 'editor',
            'desc' => __('blog Content 1', 'dmseducation'),
        ),

        array(
            'title' => 'Blog Image-2',
            'id' => 'blog_img_2',
            'type' => 'media',
            'desc' => __('Change the Image', 'dmseducation'),
            'default' => array(
                'url' => get_template_directory_uri() . '/img/com.jpg'
            ),
        ),

array(
            'title' => __('Title 2', 'dmseducation'),
            'id' => 'Blog_title 2',
            'type' => 'text',
        ),

array(
            'title' => 'blog Content 2',
            'id' => 'blog_content 2',
            'type' => 'editor',
            'desc' => __('blog Content 2', 'dmseducation'),
        ),


        array(
            'title' => 'Blog Image-3',
            'id' => 'blog_img_3',
            'type' => 'media',
            'desc' => __('Change the Image', 'dmseducation'),
            'default' => array(
                'url' => get_template_directory_uri() . '/img/post1.jpg'
            ),
        ),
    

array(
            'title' => __('Title 3', 'dmseducation'),
            'id' => 'Blog_title 3',
            'type' => 'text',
        ),

array(
            'title' => 'blog Content 3',
            'id' => 'blog_content 3',
            'type' => 'editor',
            'desc' => __('blog Content 3', 'dmseducation'),
        ),

    )
));

Redux::setSection($opt_name, array(
    'title' => __('Services', 'dmseducation'),
    'id' => 'services_list',
    'subsection' => 'true',
    'desc' => __('This is the home services list section to  customize', 'dmseducation'),
   )
);
// ->  End Home Content Section
// ->  Services Content Section

Redux::setSection($opt_name, array(
    'title' => __('Services Content', 'dmseducation'),
    'id' => 'services',
    'desc' => __('This is the section for services content to  customize', 'dmseducation'),
));

Redux::setSection($opt_name, array(
    'title' => __('Student Consultancy', 'dmseducation'),
    'id' => 'consultancy_services',
    'desc' => __('This is the section for services student consultancy content to  customize', 'dmseducation'),
));

Redux::setSection($opt_name, array(
    'title' => __('Student consultancy Services', 'dmseducation'),
    'subsection' => 'true',
    'desc' => __('This is the Services  PPCM section to  customize', 'dmseducation'),
    'fields' => array(
        array(
            'title' => 'Student consultancy Title',
            'id' => 'consultancy_service_title',
            'type' => 'text',
            'desc' => __('Title', 'dmseducation'),
            'default' => 'Student consultancy',
        ),
        array(
            'title' => 'Student consultancy Content',
            'id' => 'student_consultancy_content',
            'type' => 'editor',
            'desc' => __('student Service Content', 'dmseducation'),
        ),
        
    )
));

Redux::setSection($opt_name, array(
    'title' => __('Full Bank Support', 'dmseducation'),
    'id' => 'bank',
    'desc' => __('This is the section for services Email Marketing content to  customize', 'dmseducation'),
));

Redux::setSection($opt_name, array(
    'title' => __('Full Bank support', 'dmseducation'),
    'subsection' => 'true',
    'desc' => __('This is the Services  PPCM section to  customize', 'dmseducation'),
    'fields' => array(
        array(
            'title' => 'Full Bank support Title',
            'id' => 'full_bank_ support title',
            'type' => 'text',
            'desc' => __('Title', 'dmseducation'),
            'default' => 'Full Bank Support',
        ),
        array(
            'title' => 'Full Bank Support Content',
            'id' => 'full_bank_content',
            'type' => 'editor',
            'desc' => __('Full Bank Support Content', 'dmseducation'),
        ),
        
    )
));

Redux::setSection($opt_name, array(
    'title' => __('Visa Processing', 'dmseducation'),
    'id' => 'services_smm_service',
    'desc' => __('This is the section for Services Social Media Marketing content to  customize', 'dmseducation'),
));

Redux::setSection($opt_name, array(
    'title' => __('Visa Processing', 'dmseducation'),
    'subsection' => 'true',
    'desc' => __('This is the Services  PPCM section to  customize', 'dmseducation'),
    'fields' => array(
        array(
            'title' => 'Visa Processing Title',
            'id' => 'visa_processing title',
            'type' => 'text',
            'desc' => __('Title', 'dmseducation'),
            'default' => 'Visa Processing',
        ),
        array(
            'title' => 'Visa Processing Content',
            'id' => 'visa_processing_content',
            'type' => 'editor',
            'desc' => __('visa_processing_Content', 'dmseducation'),
        ),
        
    )
));

Redux::setSection($opt_name, array(
    'title' => __('Student Documents Support', 'dmseducation'),
    'id' => 'services_ppcm',
    'desc' => __('This is the section for Services Social Media Marketing content to  customize', 'dmseducation'),
));

Redux::setSection($opt_name, array(
    'title' => __('Student Services', 'dmseducation'),
    'subsection' => 'true',
    'desc' => __('This is the Services  PPCM section to  customize', 'dmseducation'),
    'fields' => array(
        array(
            'title' => 'Student Service Title',
            'id' => 'student_service_title',
            'type' => 'text',
            'desc' => __('Title', 'dmseducation'),
            'default' => 'student documents support',
        ),
        array(
            'title' => 'Student Service Content',
            'id' => 'ppcm_service_content',
            'type' => 'editor',
            'desc' => __('student Service Content', 'dmseducation'),
        ),
        
    )
));


Redux::setSection($opt_name, array(
    'title' => __('University payment Support', 'dmseducation'),
    'id' => 'student payment',
    'desc' => __('This is the section for Services Social Media Marketing content to  customize', 'dmseducation'),
));

Redux::setSection($opt_name, array(
    'title' => __('University  Services', 'dmseducation'),
    'subsection' => 'true',
    'desc' => __('This is the Services  PPCM section to  customize', 'dmseducation'),
    'fields' => array(
        array(
            'title' => 'University Service Title',
            'id' => 'university_service_title',
            'type' => 'text',
            'desc' => __('Title', 'dmseducation'),
            'default' => 'University payment support',
        ),
        array(
            'title' => 'University Service Content',
            'id' => 'university_service_content',
            'type' => 'editor',
            'desc' => __('university Service Content', 'dmseducation'),
        ),
      )  
    
    )
);

Redux::setSection($opt_name, array(
    'title' => __('Study Usa', 'dmseducation'),
    'id' => 'usa_list',
    'desc' => __('This is the section for university list content to  customize', 'dmseducation'),
));

Redux::setSection($opt_name, array(
    'title' => __('Study_in_usa', 'dmseducation'),
    'subsection' => 'true',
    'desc' => __('This is the country section to  customize', 'dmseducation'),
    'fields' => array(
        array(
            'title' => 'study Title',
            'id' => 'study_title',
            'type' => 'text',
            'desc' => __('Title', 'dmseducation'),
            'default' => 'study in usa',
        ),
        array(
            'title' => 'study in usa Content',
            'id' => 'study_in_usa content1',
            'type' => 'textarea',
            
        ),

        array(
            'title' => 'study in usa Content',
            'id' => 'study_in_usa content2',
            'type' => 'textarea',
            
        ),

        array(
            'title' => 'Country Image',
            'id' => 'Country_Image',
            'type' => 'media',
            'desc' => __('Change the Image', 'dmseducation'),
            'default' => array(
                'url' => get_template_directory_uri() . '/img/USA.png'
            ),
        ),

 )       

));

Redux::setSection($opt_name, array(
    'title' => __('Study Canada', 'dmseducation'),
    'id' => 'canada_list',
    'desc' => __('This is the section for university list content to  customize', 'dmseducation'),
));


Redux::setSection($opt_name, array(
    'title' => __('Study_in_canada', 'dmseducation'),
    'subsection' => 'true',
    'desc' => __('This is the country section to  customize', 'dmseducation'),
    'fields' => array(
        array(
            'title' => 'study Title',
            'id' => 'study_title',
            'type' => 'text',
            'desc' => __('Title', 'dmseducation'),
            'default' => 'study in canada',
        ),
        array(
            'title' => 'study in canada Content',
            'id' => 'study_in_canada content',
            'type' => 'editor',
            
        ),


array(
            'title' => 'Country Image',
            'id' => 'Country Image',
            'type' => 'media',
            'desc' => __('Change the Image', 'dmseducation'),
            'default' => array(
                'url' => get_template_directory_uri() . '/img/canada.png'
            ),
        ),
 )       

));

Redux::setSection($opt_name, array(
    'title' => __('Study Sweden', 'dmseducation'),
    'id' => 'sweden_list',
    'desc' => __('This is the section for university list content to  customize', 'dmseducation'),
));

Redux::setSection($opt_name, array(
    'title' => __('Study_in_sweden', 'dmseducation'),
    'subsection' => 'true',
    'desc' => __('This is the country section to  customize', 'dmseducation'),
    'fields' => array(
        array(
            'title' => 'study Title',
            'id' => 'study_title',
            'type' => 'text',
            'desc' => __('Title', 'dmseducation'),
            'default' => 'study in usa',
        ),
        array(
            'title' => 'study in sweden Content',
            'id' => 'study_in_sweden content',
            'type' => 'editor',
            
        ),
array(
            'title' => 'Country Image',
            'id' => 'Country Img',
            'type' => 'media',
            'desc' => __('Change the Image', 'dmseducation'),
            'default' => array(
                'url' => get_template_directory_uri() . '/img/sweden.png'
            ),
        ),

 )       

));

Redux::setSection($opt_name, array(
    'title' => __('Study japan', 'dmseducation'),
    'id' => 'japan_list',
    'desc' => __('This is the section for university list content to  customize', 'dmseducation'),
));

Redux::setSection($opt_name, array(
    'title' => __('Study_in_japan', 'dmseducation'),
    'subsection' => 'true',
    'desc' => __('This is the country section to  customize', 'dmseducation'),
    'fields' => array(
        array(
            'title' => 'study Title',
            'id' => 'study_title',
            'type' => 'text',
            'desc' => __('Title', 'dmseducation'),
            'default' => 'study in japan',
        ),
        array(
            'title' => 'study in japan Content',
            'id' => 'study_in_japan content',
            'type' => 'editor',
            
        ),


array(
            'title' => 'Country Image',
            'id' => 'Country Image japan',
            'type' => 'media',
            'desc' => __('Change the Image', 'dmseducation'),
            'default' => array(
                'url' => get_template_directory_uri() . '/img/japan.jpg'
            ),
        ),
 )       

));

Redux::setSection($opt_name, array(
    'title' => __('Study Malaysia', 'dmseducation'),
    'id' => 'malaysia_list',
    'desc' => __('This is the section for university list content to  customize', 'dmseducation'),
));

Redux::setSection($opt_name, array(
    'title' => __('Study_in_malaysia', 'dmseducation'),
    'subsection' => 'true',
    'desc' => __('This is the country section to  customize', 'dmseducation'),
    'fields' => array(
        array(
            'title' => 'study Title',
            'id' => 'study_title',
            'type' => 'text',
            'desc' => __('Title', 'dmseducation'),
            'default' => 'study in malaysia',
        ),
        array(
            'title' => 'study in malaysia Content',
            'id' => 'study_in_malaysia content',
            'type' => 'editor',
            
        ),


array(
            'title' => 'Country Image',
            'id' => 'Country Image malaysia',
            'type' => 'media',
            'desc' => __('Change the Image', 'dmseducation'),
            'default' => array(
                'url' => get_template_directory_uri() . '/img/malaysia.png'
            ),
        ),


 )       

));

// ->  End web maintenance Content Section
// ->  Start About us Section
Redux::setSection($opt_name, array(
    'title' => __('About us', 'dmseducation'),
    'id' => 'about_us',
    'desc' => __('This is the About US content to  customize', 'dmseducation'),
));
Redux::setSection($opt_name, array(
    'title' => __('About Our Company', 'dmseducation'),
    'subsection' => 'true',
    'desc' => __('This is the About Our Company section to  customize', 'dmseducation'),
    'fields' => array(
        array(
            'title' => 'About Company Title',
            'id' => 'about_company_title',
            'type' => 'text',
            'desc' => __('Title', 'dmseducation'),
            'default' => 'Short Story About Our Company',
        ),
       
        array(
            'title' => 'About Company',
            'id' => 'about_company_details',
            'type' => 'editor',
            'desc' => __('About Company', 'dmseducation'),
            'args' => array(
                'teeny' => true,
                'textarea_rows' => 15
            )
        ),
   
            array(
            'title' => 'home_about',
            'id' => 'home_about_picture',
            'type' => 'media',
            'desc' => __('Change the Image', 'dmseducation'),
            'default' => array(
                'url' => get_template_directory_uri() . '/img/edu.png'
            ),
        ),







    )
));

// ->  End About us Section
 



// ->  Start Contact Us Section   
Redux::setSection($opt_name, array(

    'title' => __('Contact Us', 'dmseducation'),
    'id' => 'contact_us',
    'desc' => __('This is the Contact Us section  to  customize', 'dmseducation'),
));
Redux::setSection($opt_name, array(
    'title' => __('Our Location', 'dmseducation'),
    'subsection' => 'true',
    'desc' => __('This is Location section to  customize', 'dmseducation'),
    'fields' => array(
        array(
            'title' => 'Title',
            'id' => 'contact_us_location_title',
            'type' => 'text',
            'desc' => __('Title', 'dmseducation'),
            'default' => 'Contact us',
        ),
        
        







        array(
            'title' => 'Address',
            'id' => 'contact_us_location_address_1',
            'type' => 'textarea',
            'desc' => __('Address', 'dmseducation'),
            'default' => 'Nigar Plaza, Flat # 6/A, Level 7, Rd# 02, Sec# 03, Rajlokkhi Uttara Dhaka',
        ),
        array(
            'title' => 'Phone',
            'id' => 'contact_us_location_phone_1',
            'type' => 'text',
            'desc' => __('Phone Number', 'dmseducation'),
            'default' => '+880961-326-0655, +880174-326-0655',
        ),
        array(
            'title' => 'Whatsapp',
            'id' => 'contact_us_location_whatsapp_1',
            'type' => 'text',
            'desc' => __('Whatsapp Number', 'dmseducation'),
            'default' => '+8801534765627',
        ),
        array(
            'title' => 'Email',
            'id' => 'contact_us_location_email_1',
            'type' => 'text',
            'validate' => 'email',
            'desc' => __('Email Address', 'dmseducation'),
            'default' => 'info@digitalmarketingbd.com',
        ),
        array(
            'title' => 'Skype',
            'id' => 'contact_us_location_skype_1',
            'type' => 'text',
            'desc' => __('Skype', 'dmseducation'),
            'default' => 'dmsolution2015',
        ),
        array(
            'title' => 'Viber',
            'id' => 'contact_us_location_viber_1',
            'type' => 'text',
            'desc' => __('Viber', 'dmseducation'),
            'default' => '+8801534765627',
        ),
        array(
            'title' => 'Country Name',
            'id' => 'contact_us_location_contry_1',
            'type' => 'text',
            'desc' => __('Country Name', 'dmseducation'),
            'default' => 'Bangladesh',
        ),
    )
));




Redux::setSection($opt_name, array(
    'title' => __('Contact Us Form', 'dmseducation'),
    'subsection' => 'true',
    'desc' => __('This is Form section to  customize', 'dmseducation'),
    'fields' => array(
        array(
            'title' => 'Title',
            'id' => 'contact_us_form_title',
            'type' => 'text',
            'desc' => __('Title', 'dmseducation'),
            'default' => 'Have You Any Questions?',
        ),
        array(
            'title' => 'Form Info',
            'id' => 'contact_us_form_info',
            'type' => 'textarea',
            'desc' => __('Form Info', 'dmseducation'),
            'default' => 'Please contact us using the form and we’ll get back to you as soon as possible.',
        ),
        array(
            'title' => 'Note',
            'id' => 'contact_us_form_note',
            'type' => 'textarea',
            'desc' => __('Note', 'dmseducation'),
            'default' => 'Please, let us know any particular things to check and the best time to contact you by phone (if provided). ',
        ),
    )
));





// ->  footer Section   
Redux::setSection($opt_name, array(
    'title' => __('Footer', 'dmseducation'),
    'id' => 'footer',
    'desc' => __('This is the Footer section  to  customize', 'dmseducation'),
));






Redux::setSection($opt_name, array(
    'title' => __(' Footer Logo', 'dmseducation'),
    'id' => 'footer_logo',
    'subsection' => 'true',
    'desc' => __('This is the logo section to  customize', 'dmseducation'),
    'fields' => array(
        array(
            'title' => 'Logo',
            'id' => 'logo',
            'type' => 'media',
            'desc' => __('Change the logo', 'dmseducation'),
            'default' => array(
                'url' => get_template_directory_uri() . '/img/edu.png'
            ),
        ),
        array(
            'title' => __('Logo Title', 'dmseducation'),
            'id' => 'logo_title',
            'type' => 'text',
            'default' => 'Dms'
        ),



array(
            'title' => ' Dms Content',
            'id' => 'Dms_content',
            'type' => 'editor',
            
        ),

)

));



Redux::setSection($opt_name, array(
    'title' => __('Services Provided', 'dmseducation'),
    'subsection' => 'true',
    'desc' => __('This is services list section to  customize', 'dmseducation'),
    'fields' => array(        
        array(
            'title' => 'Page Title',
            'id' => 'page_title',
            'type' => 'multi_text',
            'desc' => __('Title', 'dmseducation'),
            'default' => 'Search Engine Optimization (SEO)',
        ),
        array(
            'title' => 'Page Link',
            'id' => 'page_link',
            'type' => 'multi_text',
            'desc' => __('Title', 'dmseducation'),
            'default' => 'http://www.digitalmarketingagencyllc.com/search-engine-optimization-seo/',
        ),
        array(
            'title' => __('ADD Development', 'dmseducation'),
            'type' => 'info',
            'style' => 'success',
            'id' => 'page_success',
            'desc' => __('Set up development services.', 'dmseducation'),
        ),
        array(
            'title' => 'Page Title',
            'id' => 'page_title_1',
            'type' => 'multi_text',
            'desc' => __('Title', 'dmseducation'),
            'default' => 'Search Engine Optimization (SEO)',
        ),
        array(
            'title' => 'Page Link',
            'id' => 'page_link_1',
            'type' => 'multi_text',
            'desc' => __('Title', 'dmseducation'),
            'default' => 'http://www.digitalmarketingagencyllc.com/search-engine-optimization-seo/',
        ),
    )
));





     Redux::setSection($opt_name, array(
    'title' => __('Google Map', 'dmseducation'),
    'subsection' => 'true',
    'desc' => __('This is Location section to  customize', 'dmseducation'),
    'fields' => array(
        array(
            'title' => __('Add Location', 'dmseducation'),
            'type' => 'info',
            'style' => 'success',
            'id' => 'info_success_2',
            'desc' => __('Set up your Location and Map below.', 'dmseducation'),
        ),
        
        array(
            'title' => 'Map',
            'id' => 'contact_us_location_map_2',
            'type' => 'textarea',
            'validate' => 'url',
            'desc' => __('Maps(Note: only use src link)', 'dmseducation'),
            'default' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d96776.99688269867!2d-73.87524092508491!3d40.71182683466088!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c261beed396d35%3A0xcc6cb5ca87610fe0!2sDigital+Marketing+Agency+LLC!5e0!3m2!1sen!2sbd!4v1535602845680',
        ),   



)
));







Redux::setSection($opt_name, array(
    'title' => __('Copyright', 'dmseducation'),
    'subsection' => 'true',
    'desc' => __('This is copyright section to  customize', 'dmseducation'),
    'fields' => array(
        array(
            'title' => 'Copyright Title',
            'id' => 'copyright_title',
            'type' => 'text',
            'desc' => __('Title', 'dmseducation'),
            'default' => 'Copyright © 2016',
        ),
        array(
            'title' => 'Developed Title',
            'id' => 'developer_title',
            'type' => 'text',
            'desc' => __('Title', 'dmseducation'),
            'default' => 'Developed by',
        ),
        array(
            'title' => 'Developer name',
            'id' => 'developer_name',
            'type' => 'text',
            'desc' => __('Developer Name', 'dmseducation'),
            'default' => 'Shakil Ahmed',
        ),
        array(
            'title' => 'Developer Website',
            'id' => 'developer_website',
            'type' => 'text',
            'desc' => __('Developer Website', 'dmseducation'),
            'default' => 'http://iamshakil.com/',
        ),
    )
));


















// ->  End Footer Section  



/*
 * <--- END SECTIONS
 */


/*
 *
 * YOU MUST PREFIX THE FUNCTIONS BELOW AND ACTION FUNCTION CALLS OR ANY OTHER CONFIG MAY OVERRIDE YOUR CODE.
 *
 */

/*
 *
 * --> Action hook examples
 *
 */

// If Redux is running as a plugin, this will remove the demo notice and links
//add_action( 'redux/loaded', 'remove_demo' );
// Function to test the compiler hook and demo CSS output.
// Above 10 is a priority, but 2 in necessary to include the dynamically generated CSS to be sent to the function.
//add_filter('redux/options/' . $opt_name . '/compiler', 'compiler_action', 10, 3);
// Change the arguments after they've been declared, but before the panel is created
//add_filter('redux/options/' . $opt_name . '/args', 'change_arguments' );
// Change the default value of a field after it's been set, but before it's been useds
//add_filter('redux/options/' . $opt_name . '/defaults', 'change_defaults' );
// Dynamically add a section. Can be also used to modify sections/fields
//add_filter('redux/options/' . $opt_name . '/sections', 'dynamic_section');

/**
 * This is a test function that will let you see when the compiler hook occurs.
 * It only runs if a field    set with compiler=>true is changed.
 * */
if (!function_exists('compiler_action')) {

    function compiler_action($options, $css, $changed_values) {
        echo '<h1>The compiler hook has run!</h1>';
        echo "<pre>";
        print_r($changed_values); // Values that have changed since the last save
        echo "</pre>";
        //print_r($options); //Option values
        //print_r($css); // Compiler selector CSS values  compiler => array( CSS SELECTORS )
    }

}

/**
 * Custom function for the callback validation referenced above
 * */
if (!function_exists('redux_validate_callback_function')) {

    function redux_validate_callback_function($field, $value, $existing_value) {
        $error = false;
        $warning = false;

        //do your validation
        if ($value == 1) {
            $error = true;
            $value = $existing_value;
        } elseif ($value == 2) {
            $warning = true;
            $value = $existing_value;
        }

        $return['value'] = $value;

        if ($error == true) {
            $field['msg'] = 'your custom error message';
            $return['error'] = $field;
        }

        if ($warning == true) {
            $field['msg'] = 'your custom warning message';
            $return['warning'] = $field;
        }

        return $return;
    }

}

/**
 * Custom function for the callback referenced above
 */
if (!function_exists('redux_my_custom_field')) {

    function redux_my_custom_field($field, $value) {
        print_r($field);
        echo '<br/>';
        print_r($value);
    }

}

/**
 * Custom function for filtering the sections array. Good for child themes to override or add to the sections.
 * Simply include this function in the child themes functions.php file.
 * NOTE: the defined constants for URLs, and directories will NOT be available at this point in a child theme,
 * so you must use get_template_directory_uri() if you want to use any of the built in icons
 * */
if (!function_exists('dynamic_section')) {

    function dynamic_section($sections) {
        //$sections = array();
        $sections[] = array(
            'title' => __('Section via hook', 'redux-framework-demo'),
            'desc' => __('<p class="description">This is a section created by adding a filter to the sections array. Can be used by child themes to add/remove sections from the options.</p>', 'redux-framework-demo'),
            'icon' => 'el el-paper-clip',
            // Leave this as a blank section, no options just some intro text set above.
            'fields' => array()
        );

        return $sections;
    }

}

/**
 * Filter hook for filtering the args. Good for child themes to override or add to the args array. Can also be used in other functions.
 * */
if (!function_exists('change_arguments')) {

    function change_arguments($args) {
        //$args['dev_mode'] = true;

        return $args;
    }

}

/**
 * Filter hook for filtering the default value of any given field. Very useful in development mode.
 * */
if (!function_exists('change_defaults')) {

    function change_defaults($defaults) {
        $defaults['str_replace'] = 'Testing filter hook!';

        return $defaults;
    }

}

/**
 * Removes the demo link and the notice of integrated demo from the redux-framework plugin
 */
if (!function_exists('remove_demo')) {

    function remove_demo() {
        // Used to hide the demo mode link from the plugin page. Only used when Redux is a plugin.
        if (class_exists('ReduxFrameworkPlugin')) {
            remove_filter('plugin_row_meta', array(
                ReduxFrameworkPlugin::instance(),
                'plugin_metalinks'
                    ), null, 2);

            // Used to hide the activation notice informing users of the demo panel. Only used when Redux is a plugin.
            remove_action('admin_notices', array(ReduxFrameworkPlugin::instance(), 'admin_notices'));
        }
    }

}

