<?php

    /**
     * For full documentation, please visit: http://docs.reduxframework.com/
     * For a more extensive sample-config file, you may look at:
     * https://github.com/reduxframework/redux-framework/blob/master/sample/sample-config.php
     */

    if ( ! class_exists( 'Redux' ) ) {
        return;
    }

    // This is your option name where all the Redux data is stored.
    $opt_name = "indielee";

    /**
     * ---> SET ARGUMENTS
     * All the possible arguments for Redux.
     * For full documentation on arguments, please refer to: https://github.com/ReduxFramework/ReduxFramework/wiki/Arguments
     * */

    $theme = wp_get_theme(); // For use with some settings. Not necessary.

    $args = array(
        'opt_name' => 'indielee',
        'dev_mode' => false,
        'use_cdn' => TRUE,
        'display_name' => 'Indie Lee Theme',
        'display_version' => FALSE,
        'page_slug' => 'indielee_options',
        'page_title' => 'Sample Options',
        'update_notice' => TRUE,
        'admin_bar' => TRUE,
        'menu_type' => 'submenu',
        'menu_title' => 'Theme settings',
        'allow_sub_menu' => TRUE,
        'page_parent' => 'options-general.php',
        'page_parent_post_type' => 'your_post_type',
        'customizer' => TRUE,
        'default_mark' => '*',
        'hints' => array(
            'icon_position' => 'right',
            'icon_size' => 'normal',
            'tip_style' => array(
                'color' => 'light',
            ),
            'tip_position' => array(
                'my' => 'top left',
                'at' => 'bottom right',
            ),
            'tip_effect' => array(
                'show' => array(
                    'duration' => '500',
                    'event' => 'mouseover',
                ),
                'hide' => array(
                    'duration' => '500',
                    'event' => 'mouseleave unfocus',
                ),
            ),
        ),
        'output' => TRUE,
        'output_tag' => TRUE,
        'settings_api' => TRUE,
        'cdn_check_time' => '1440',
        'compiler' => TRUE,
        'page_permissions' => 'manage_options',
        'save_defaults' => TRUE,
        'show_import_export' => TRUE,
        'transient_time' => '3600',
        'network_sites' => TRUE,
    );

    Redux::setArgs( $opt_name, $args );

    /*
     * ---> END ARGUMENTS
     */


    /*
     *
     * ---> START SECTIONS
     *
     */

    Redux::setSection( $opt_name, array(
        'title'  => __( 'Jumbotron', 'indielee-admin' ),
        'id'     => 'basic',
        'desc'   => __( 'Settings for the jumbotron', 'indielee-admin' ),
        'icon'   => 'el el-home',
        'fields' => array(
            array(
                'id'       => 'opt-media-jumbotron-product',
                'type'     => 'media', 
                'url'      => true,
                'title'    => __('Jumbotron product image', 'indielee-admin'),
                'desc'     => __('Image used on the left side of the jumbotron.', 'indielee-admin')
            ),
            array(
                'id'       => 'opt-text-jumbotron-header',
                'type'     => 'text',
                'title'    => __( 'Header for jumbotron', 'indielee-admin' )
            ),
            array(
                'id'       => 'opt-textarea-jumbotron-description',
                'type'     => 'textarea', 
                'url'      => true,
                'title'    => __('Jumbotron description', 'indielee-admin'),
            ),
            array(
                'id'       => 'opt-media-jumbotron-secondary-image',
                'type'     => 'media', 
                'url'      => true,
                'title'    => __('Jumbotron secondary image', 'indielee-admin'),
                'desc'     => __('Image used on the right side of the jumbotron.', 'indielee-admin')
            )
        )
    ) );

    Redux::setSection( $opt_name, array(
        'title' => __( 'Homepage', 'indielee-admin' ),
        'id'    => 'basic',
        'desc'  => __( 'Basic fields as subsections.', 'indielee-admin' ),
        'icon'  => 'el el-home'
    ) );

    Redux::setSection( $opt_name, array(
        'title' => __( 'Templates', 'indielee-admin' ),
        'id'    => 'templates',
        'desc'  => __( 'Shared templete files.', 'indielee-admin' ),
        'icon'  => 'el el-website-alt'
    ) );

    Redux::setSection( $opt_name, array(
        'title'      => __( 'Header', 'indielee-admin' ),
        'desc'  => __( 'Design elements in the page header.', 'indielee-admin' ),
        'id'         => 'templates-subsection',
        'subsection' => true,
        'fields'     => array(
            array(
                'id'       => 'opt-text-shipping',
                'type'     => 'text',
                'title'    => __('Text in the header, next to the secondary menu', 'indielee-admin'),
                'default'  => 'Free domestic shipping with $50 purchaser. Next day delivery.'
            ),
        )
    ) );

    /*
     * <--- END SECTIONS
     */
