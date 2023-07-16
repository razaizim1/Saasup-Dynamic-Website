<?php

if (class_exists('CSF')) {

    // Set a unique slug-like ID
    $prefix = 'coderit';

    // Create options
    CSF::createOptions($prefix, array(
        'menu_title' => 'Theme Options',
        'menu_slug' => 'theme-options',
        'show_search' => true,
        'footer_text' => 'Thank you for creating with Razai Zim',
        'framework_title' => 'Theme Options <small> By Razai Zim </small>',
        'menu_position' => 50,
        'menu_icon' => 'dashicons-insert'

    ));

    // Header Section
    CSF::createSection($prefix, array(
        'title' => 'Header Options',
        'icon' => 'dashicons dashicons-admin-generic',
        'fields' => array(
            array(
                'id' => 'favicon-upload',
                'type' => 'media',
                'title' => 'Upload Favicon',
                'default' => array(
                    'url' => get_template_directory_uri() . '/assets/images/favicon-icon.png'
                )
            ),
            array(
                'id' => 'header-logo-upload',
                'type' => 'media',
                'title' => 'Upload Header Logo',
                'default' => array(
                    'url' => get_template_directory_uri() . '/assets/images/Logo.svg',
                )
            ),
            array(
                'id' => 'header-button',
                'type' => 'text',
                'title' => 'Header Button',
                'default' => 'Sing In'
            ),
            array(
                'id' => 'header-button-url',
                'type' => 'text',
                'title' => 'Header Button Url',
                'default' => '#'
            ),
        )
    ));

    // Footer Section
    CSF::createSection($prefix, array(
        'title' => 'Footer Options',
        'icon' => 'dashicons dashicons-screenoptions',
        'fields' => array(
            array(
                'id' => 'footer-logo-upload',
                'type' => 'media',
                'title' => 'Upload Logo'
            ),
            array(
                'id' => 'footer-description',
                'type' => 'textarea',
                'title' => 'Footer Description',
                'default' => 'It is a long established fact that from will be distracted by the readable from when looking.'
            ),
            array(
                'id' => 'footer-email-phone',
                'type' => 'repeater',
                'title' => 'Footer Email & Phone',
                'fields' => array(
                    array(
                        'id' => 'phone-email-icon',
                        'type' => 'icon',
                        'title' => 'Email & Phone Icon'
                    ),
                    array(
                        'id' => 'email-phone-value-repeater',
                        'type' => 'repeater',
                        'title' => 'Email & Phone Value Repeater',
                        'fields' => array(
                            array(
                                'id' => 'email-phone-item',
                                'type' => 'text',
                                'title' => 'Email & Phone Item',
                            ),
                        )
                    )
                )
            ),
            array(
                'id' => 'copyright',
                'type' => 'text',
                'title' => 'Copyright Text',
                'default' => 'Copyright © Saasup | Designed by Razai Zim'
            ),
            array(
                'id' => 'social-icons',
                'type' => 'repeater',
                'title' => 'Social Icons',
                'fields' => array(
                    array(
                        'id' => 'social-icons',
                        'type' => 'icon',
                        'title' => 'Social Icons'
                    ),
                    array(
                        'id' => 'social-url',
                        'type' => 'text',
                        'title' => 'Social URL'
                    )
                )
            )
        )
    ));

    // Banner Section
    CSF::createSection($prefix, array(
        'title' => 'Banner Options',
        'fields' => array(

            array(
                'id' => 'banner-image',
                'type' => 'media',
                'title' => 'Banner Image',
                'default' => array(
                    'url' => get_template_directory_uri() . '/assets/images/Image22.png'
                )
            ),
            array(
                'id' => 'banner-title',
                'type' => 'text',
                'title' => 'Banner Title',
                'default' => 'Build your audience and grow your brand'
            ),
            array(
                'id' => 'banner-description',
                'type' => 'textarea',
                'title' => 'Banner Description',
                'default' => 'Lorem ipsum dolor sit amet consectetur adipiscing elit interdum ullamcorper sed pharetra sene'
            ),
            array(
                'id' => 'banner-button1',
                'type' => 'text',
                'title' => 'Banner Button 1',
                'default' => 'Get Started',
            ),
            array(
                'id' => 'banner-button1 url',
                'type' => 'text',
                'title' => 'Banner Button 1 Url',
                'default' => '#',
            ),
            array(
                'id' => 'banner-button2',
                'type' => 'text',
                'title' => 'Banner Button 2',
                'default' => 'Watch Now',
            ),
            array(
                'id' => 'banner-button2-video-url',
                'type' => 'text',
                'title' => 'Button 2 Video Url',
                'default' => 'https://www.youtube.com/watch?v=oOkGmK3_Hdg',
            ),
            array(
                'id' => 'banner-button2-icon',
                'type' => 'text',
                'title' => 'Button 2 Video Icon',
                'default' => 'fa-regular fa-circle-play',
            ),

        )
    ));
};

// Trial Section
CSF::createSection($prefix, array(
    'title' => 'Trial Section',
    'fields' => array(
        array(
            'id' => 'trail_image',
            'type' => 'media',
            'title' => 'Trail Image',
            'default' => array(
                'url' => get_template_directory_uri() . '/assets/images/trial-img/trial-img.png',
            ),
        ),
        array(
            'id' => 'trial_heading',
            'type' => 'text',
            'title' => 'Trial Heading',
            'default' => 'Start your free trail today'
        ),
        array(
            'id' => 'trial_description',
            'type' => 'textarea',
            'title' => 'Trial Description',
            'default' => 'It is long established fact that a reader will be by the readable when looking at it layout'
        ),
        array(
            'id' => 'form_shortcode',
            'type' => 'text',
            'title' => 'Form Shortcode'
        )
    ),
));

// Blog Section
CSF::createSection($prefix, array(
    'title' => 'Blog Section',
    'fields' => array(
        array(
            'id' => 'blog-heading',
            'type' => 'text',
            'title' => 'Blog Heading',
            'default' => 'News & Articles',

        ),
        array(
            'id' => 'blog-description',
            'type' => 'textarea',
            'title' => 'Blog Description',
            'default' => 'Lorem ipsum dolor sit amet consectetur adipiscing elit interdum ullamcorper sed pharetra sene.'
        )
    ),
));

// Single Blog Section
CSF::createSection($prefix, array(
    'title' => 'Single Blog',
    'fields' => array(
        array(
            'id' => 'blog-heading',
            'type' => 'text',
            'title' => 'Blog Heading',
            'default' => 'News & Articles'
        ),
        array(
            'id' => 'blog-description',
            'type' => 'textarea',
            'title' => 'Blog Description',
            'default' => 'Lorem ipsum dolor sit amet consectetur adipiscing elit interdum ullamcorper sed pharetra sene.'
        )
    ),
));

























// Field: backup
//
CSF::createSection($prefix, array(
    'title'       => 'Backup',
    'icon'        => 'fas fa-shield-alt',
    'description' => 'Visit documentation for more details on this field: <a href="http://codestarframework.com/documentation/#/fields?id=backup" target="_blank">Field: backup</a>',
    'fields'      => array(

        array(
            'type' => 'backup',
        ),

    )
));
