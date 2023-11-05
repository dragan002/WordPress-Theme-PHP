<?php 

function wpdevs_customizer( $wpdevs_customize ) {
    // 1 Copyright Section
    $wpdevs_customize->add_action(
        'sec_copyright',
        array(
            'title' => 'Copyright Settings',
            'description' => 'Copyright Settings',
        )
    );
}