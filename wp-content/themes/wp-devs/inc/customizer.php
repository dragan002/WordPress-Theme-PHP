<?php 

function wpdevs_customizer( $wp_customize ) {
    // 1 Copyright Section
    $wp_customize->add_section(
        'sec_copyright',
        array(
            'title' => 'Copyright Settings',
            'description' => 'Copyright Settings',
        )
    );

    $wp_customize->add_setting(
        'set_copyright',
        array(
            'type' => 'theme_mod',
            'default' => 'Copyright X - All rights Reserved',
            'sanitize_callback' => 'sanitize_text_field'

        )
    );

    $wp_customize->add_control(
        'set_copyright',
        array(
            'label' => 'Copyright Information',
            'description' => 'Please, type your copyright here',
            'section' => 'sec_copyright',
            'type' => 'text'
        )
    );

    //2 Hero

    $wp_customize->add_section(
        'sec_hero',
        array(
            'title' => 'Hero Section'
        )
    );

    $wp_customize->add_setting(
        'set_hero_title',
        array(
            'type' => 'theme_mod',
            'default' => 'Please add some title',
            'sanitize_callback' => 'sanitize_text_field'
        )
    );

    $wp_customize->add_control(
        'set_hero_title',
        array(
            'label' => 'Title of the hero section',
            'description' => 'Please type you title here',
            'section' => 'sec_hero',
            'type' => 'text'
        )
    );

    //Subtitle

    $wp_customize->add_setting(
        'set_hero_subtitle',
        array(
            'type' => 'theme_mod',
            'default' => 'Please add subtitle text',
            'sanitize_callback' => 'sanitize_textarea_field'
        )
    );

    $wp_customize->add_control(
        'set_hero_subtitle',
        array(
            'label' => 'Subtitle of the hero section',
            'description' => 'Please type you subtitle here',
            'section' => 'sec_hero',
            'type' => 'textarea'
        )
    );

    //Button

    $wp_customize->add_setting(
        'set_hero_button_text',
        array(
            'type' => 'theme_mod',
            'default' => 'Learn More',
            'sanitize_callback' => 'sanitize_text_field'
        )
    );

    $wp_customize->add_control(
        'set_hero_button_text',
        array(
            'label' => 'Button of the hero section',
            'description' => 'Please type your button text here',
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
                'label' => 'Link  of the hero section',
                'description' => 'Please type your link text here',
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
                'label' => 'Height of the hero section',
                'description' => 'Please type your hero here',
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

        $wp_customize->add_control( new WP_Customize_Media_Control(
            $wp_customize,
            'set_hero_background',
            array(
                'label' => 'Hero Image',
                'mime_type'=> 'image',
                'section' => 'sec_hero'
            )
        ));
}

add_action('customize_register', 'wpdevs_customizer');