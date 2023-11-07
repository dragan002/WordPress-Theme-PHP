<?php 

function wpdevs_customizer( $wp_customize ) {
    // 1 Copyright Section
    $wp_customize->add_section(
        'sec_copyright',
        array(
            'title' => __('Copyright Settings', 'wp-devs'),
            'description' => __('Copyright Settings', 'wp-devs'),
        )
    );

    $wp_customize->add_setting(
        'set_copyright',
        array(
            'type' => 'theme_mod',
            'default' => __('Copyright X - All rights Reserved', 'wp-devs'),
            'sanitize_callback' => 'sanitize_text_field'
        )
    );

    $wp_customize->add_control(
        'set_copyright',
        array(
            'label' => __('Copyright Information', 'wp-devs'),
            'description' => __('Please, type your copyright here', 'wp-devs'),
            'section' => 'sec_copyright',
            'type' => 'text'
        )
    );

    //new panel
    $wp_customize->add_section(
        'author_section',
        array(
            'title' => __('Author Section', 'wp-devs'),
            'description'=> __('This section will be displayed on the page-blog', 'wp-devs'),
        )
    );

    $wp_customize->add_setting(
        'set_author_section',
        array(
            'type'=> 'theme_mod',
            'default' => 'No',
            'sanitize_callback' => 'sanitize_custom_option'
        )
    );

    $wp_customize->add_control(
        'set_author_section',
        array(
            'label' => __('Display this section?'),
            'section' => 'author_section',
            'type'=> 'select',
            'choices'=> array('No' => 'No', 'Yes' => 'Yes')
        )
    );

    //text for author
    $wp_customize->add_setting(
        'set_author_text',
        array(
            'default' => 'this is text for default',
            'sanitize_callback' => 'sanitize_text_field'
        )
    );

    $wp_customize->add_control(
        'set_author_text',
        array(
            'label' => __('Type author text', 'wp-devs'),
            'description'=> __('This text will show author information', 'wp-devs'),
            'section'=> 'author_section',
        )
    );

    function sanitize_custom_option($input) {
        return($input === 'No') ? 'No' : 'Yes';
    }


    //Author image
    $wp_customize->add_setting(
        'set_author_image',
        array(
            'type'=> 'theme_mod',
            'sanitize_callback' => 'absint'
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Media_Control(
            $wp_customize,
            'set_author_image',
            array(
                'label'=> __('Author image','wp-devs'),
                'mime_type' => 'image',
                'section' => 'author_section'
            )
        )
    );
    //2 Hero

    $wp_customize->add_section(
        'sec_hero',
        array(
            'title' => __('Hero Section', 'wp-devs')
        )
    );

    $wp_customize->add_setting(
        'set_hero_title',
        array(
            'type' => 'theme_mod',
            'default' => __('Please add some title', 'wp-devs'),
            'sanitize_callback' => 'sanitize_text_field'
        )
    );

    $wp_customize->add_control(
        'set_hero_title',
        array(
            'label' => __('Title of the hero section', 'wp-devs'),
            'description' => __('Please type your title here', 'wp-devs'),
            'section' => 'sec_hero',
            'type' => 'text'
        )
    );

    //Subtitle

    $wp_customize->add_setting(
        'set_hero_subtitle',
        array(
            'type' => 'theme_mod',
            'default' => __('Please add subtitle text', 'wp-devs'),
            'sanitize_callback' => 'sanitize_textarea_field'
        )
    );

    $wp_customize->add_control(
        'set_hero_subtitle',
        array(
            'label' => __('Subtitle of the hero section', 'wp-devs'),
            'description' => __('Please type your subtitle here', 'wp-devs'),
            'section' => 'sec_hero',
            'type' => 'textarea'
        )
    );

    //Button

    $wp_customize->add_setting(
        'set_hero_button_text',
        array(
            'type' => 'theme_mod',
            'default' => __('Learn More', 'wp-devs'),
            'sanitize_callback' => 'sanitize_text_field'
        )
    );

    $wp_customize->add_control(
        'set_hero_button_text',
        array(
            'label' => __('Button of the hero section', 'wp-devs'),
            'description' => __('Please type your button text here', 'wp-devs'),
            'section' => 'sec_hero',
            'type' => 'text'
        )
    );

    //Button Link

    $wp_customize->add_setting(
        'set_hero_button_link',
        array(
            'type' => 'theme_mod',
            'default' => '#',
            'sanitize_callback' => 'esc_url_raw'
        )
    );

    $wp_customize->add_control(
        'set_hero_button_link',
        array(
            'label' => __('Link  of the hero section', 'wp-devs'),
            'description' => __('Please type your link text here', 'wp-devs'),
            'section' => 'sec_hero',
            'type' => 'url'
        )
    );

    //Hero Height

    $wp_customize->add_setting(
        'set_hero_height',
        array(
            'type' => 'theme_mod',
            'default' => '800',
            'sanitize_callback' => 'absint'
        )
    );

    $wp_customize->add_control(
        'set_hero_height',
        array(
            'label' => __('Height of the hero section', 'wp-devs'),
            'description' => __('Please type your hero here', 'wp-devs'),
            'section' => 'sec_hero',
            'type' => 'number'
        )
    );

    //Hero Background

    $wp_customize->add_setting(
        'set_hero_background',
        array(
            'type' => 'theme_mod',
            'sanitize_callback' => 'absint'
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Media_Control(
            $wp_customize,
            'set_hero_background',
            array(
                'label' => __('Hero Image', 'wp-devs'),
                'mime_type' => 'image',
                'section' => 'sec_hero'
            )
        )
    );

    //3 Blog

    $wp_customize->add_section(
        'sec_blog',
        array(
            'title' => __('Blog Section', 'wp-devs'),
        )
    );

    //Posts per page
    $wp_customize->add_setting(
        'set_per_page',
        array(
            'type' => 'theme_mod',
            'sanitize_callback' => 'absint',
        )
    );

    $wp_customize->add_control(
        'set_per_page',
        array(
            'label' => __('Number of posts to show on blog page', 'wp-devs'),
            'description' => __('How many items to display in the post list?', 'wp-devs'),
            'section' => 'sec_blog',
            'type' => 'number',
        )
    );

    //Post categories to include
    $wp_customize->add_setting(
        'set_category_include',
        array(
            'type' => 'theme_mod',
            'sanitize_callback' => 'sanitize_text_field',
        )
    );

    $wp_customize->add_control(
        'set_category_include',
        array(
            'label' => __('Post categories to Include', 'wp-devs'),
            'section' => 'sec_blog',
            'description' => __('Comma separated values or single category ID', 'wp-devs'),
            'type' => 'text',
        )
    );

    //Post categories to exclude
    $wp_customize->add_setting(
        'set_category_exclude',
        array(
            'type' => 'theme_mod',
            'sanitize_callback' => 'sanitize_text_field',
        )
    );

    $wp_customize->add_control(
        'set_category_exclude',
        array(
            'label' => __('Post Categories To Exclude', 'wp-devs'),
            'description' => __('Comma separated values or single category ID', 'wp-devs'),
            'section' => 'sec_blog',
            'type' => 'text',
        )
    );

    //New panel
}

add_action('customize_register', 'wpdevs_customizer');
