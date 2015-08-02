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
        'title'  => __( 'Basic Field', 'indielee-admin' ),
        'id'     => 'basic',
        'desc'   => __( 'Basic field with no subsections.', 'indielee-admin' ),
        'icon'   => 'el el-home',
        'fields' => array(
            array(
                'id'       => 'opt-text',
                'type'     => 'text',
                'title'    => __( 'Example Text', 'indielee-admin' ),
                'desc'     => __( 'Example description.', 'indielee-admin' ),
                'subtitle' => __( 'Example subtitle.', 'indielee-admin' ),
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
        'title'      => __( 'Layout', 'indielee-admin' ),
        'desc'  => __( 'Drag and drop the elements to arrange your home page.', 'indielee-admin' ),
        'id'         => 'opt-text-subsection',
        'subsection' => true,
        'fields'     => array(
            array(
                'id'      => 'homepage-blocks',
                'type'    => 'sorter',
                'title'   => 'Homepage Layout Manager',
                'desc'    => 'Organize how you want the layout to appear on the homepage',
                'options' => array(
                    'enabled'  => array(
                        'responsive-header' => 'Responsive header',
                        'about'   => 'About Indie Lee',
                        'bestsellers' => 'Bestsellers'
                    ),
                    'disabled' => array(
                        'slider' => 'Slider',
                        'static-header'     => 'Static header image'
                    )
                ),
            ),
        )
    ) );

    Redux::setSection( $opt_name, array(
        'title'      => __( 'Image slider', 'indielee-admin' ),
        'desc'       => __( 'For full documentation on this field, visit: ', 'indielee-admin' ) . '<a href="http://docs.reduxframework.com/core/fields/textarea/" target="_blank">http://docs.reduxframework.com/core/fields/textarea/</a>',
        'id'         => 'opt-textarea-subsection',
        'subsection' => true,
        'fields'     => array(
            array(
                'id'          => 'opt-slides-frontpage-slider',
                'type'        => 'slides',
                'title'       => __('Slides Options', 'indielee-admin'),
                'subtitle'    => __('Unlimited slides with drag and drop sortings.', 'indielee-admin'),
                'desc'        => __('This field will store all slides values into a multidimensional array to use into a foreach loop.', 'indielee-admin'),
                'placeholder' => array(
                    'title'           => __('This is a title', 'indielee-admin'),
                    'description'     => __('Description Here', 'indielee-admin'),
                    'url'             => __('Give us a link!', 'indielee-admin'),
                ),
            ),
        )
    ) );

    /*
     * <--- END SECTIONS
     */
