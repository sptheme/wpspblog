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
    $opt_name = "redux_wpsp";

    /**
     * ---> SET ARGUMENTS
     * All the possible arguments for Redux.
     * For full documentation on arguments, please refer to: https://github.com/ReduxFramework/ReduxFramework/wiki/Arguments
     * */

    $theme = wp_get_theme(); // For use with some settings. Not necessary.

    $args = array(
        'opt_name' => 'redux_wpsp',
        'use_cdn' => TRUE,
        'display_name' => 'Theme Options',
        'display_version' => '1.0.0',
        'page_title' => 'Theme Options',
        'update_notice' => TRUE,
        'intro_text' => '<p>This text is displayed above the options panel. It isn\’t required, but more info is always better! The intro_text field accepts all HTML.</p>’',
        'footer_text' => '<p>This text is displayed below the options panel. It isn\’t required, but more info is always better! The footer_text field accepts all HTML.</p>',
        'admin_bar' => TRUE,
        'menu_type' => 'menu',
        'menu_title' => 'Theme Options',
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
        'global_variable' => 'redux_wpsp',
        'page_permissions' => 'manage_options',
        'save_defaults' => TRUE,
        'show_import_export' => TRUE,
        'database' => 'options',
        'transient_time' => '3600',
        'network_sites' => TRUE,
    );

    // SOCIAL ICONS -> Setup custom links in the footer for quick links in your panel footer icons.
    $args['share_icons'][] = array(
        'url'   => 'https://github.com/ReduxFramework/ReduxFramework',
        'title' => 'Visit us on GitHub',
        'icon'  => 'el el-github'
        //'img'   => '', // You can use icon OR img. IMG needs to be a full URL.
    );
    $args['share_icons'][] = array(
        'url'   => 'https://www.facebook.com/pages/Redux-Framework/243141545850368',
        'title' => 'Like us on Facebook',
        'icon'  => 'el el-facebook'
    );
    $args['share_icons'][] = array(
        'url'   => 'http://twitter.com/reduxframework',
        'title' => 'Follow us on Twitter',
        'icon'  => 'el el-twitter'
    );
    $args['share_icons'][] = array(
        'url'   => 'http://www.linkedin.com/company/redux-framework',
        'title' => 'Find us on LinkedIn',
        'icon'  => 'el el-linkedin'
    );

    Redux::setArgs( $opt_name, $args );

    /*
     * ---> END ARGUMENTS
     */

    /*
     * ---> OTHER VARIABLE
     */

    $entry_meta_choices = array(
        'date'       => esc_html__( 'Date', 'wpsp-redux-framework' ),
        'author'     => esc_html__( 'Author', 'wpsp-redux-framework' ),
        'categories' => esc_html__( 'Categories', 'wpsp-redux-framework' ),
        'comments'   => esc_html__( 'Comments', 'wpsp-redux-framework' ),
        );

    $sites_sharing = array( 
        'twitter'       => esc_html__( 'Twitter', 'wpsp-redux-framework' ),
        'facebook'      => esc_html__( 'Facebook', 'wpsp-redux-framework' ),
        'google_plus'   => esc_html__( 'Google+', 'wpsp-redux-framework' ),
        'pinterest'     => esc_html__( 'Pinterest', 'wpsp-redux-framework' ),
        );

    $widget_tags = array(
        'h2' => 'H2',
        'h3' => 'H3',
        'h4' => 'H4',
        'h5' => 'H5',
        'h6' => 'H6',
        'div' => 'div',
    );

    $el_number = array(
        '1' => '1', 
        '2' => '2', 
        '3' => '3', 
        '4' => '4', 
        '5' => '5', 
    );

    $wpsp_overlay_styles_array = array(
        ''                              => esc_html__( 'None', 'wpsp_admin' ),
        'hover-button'                  => esc_html__( 'Hover Button', 'wpsp_admin' ),
        'magnifying-hover'              => esc_html__( 'Magnifying Glass Hover', 'wpsp_admin' ),
        'plus-hover'                    => esc_html__( 'Plus Icon Hover', 'wpsp_admin' ),
        'plus-two-hover'                => esc_html__( 'Plus Icon #2 Hover', 'wpsp_admin' ),
        'plus-three-hover'              => esc_html__( 'Plus Icon #3 Hover', 'wpsp_admin' ),
        'title-bottom'                  => esc_html__( 'Title Bottom', 'wpsp_admin' ),
        'title-bottom-see-through'      => esc_html__( 'Title Bottom See Through', 'wpsp_admin' ),
        'title-excerpt-hover'           => esc_html__( 'Title + Excerpt Hover', 'wpsp_admin' ),
        'title-category-hover'          => esc_html__( 'Title + Category Hover', 'wpsp_admin' ),
        'title-category-visible'        => esc_html__( 'Title + Category Visible', 'wpsp_admin' ),
        'title-date-hover'              => esc_html__( 'Title + Date Hover', 'wpsp_admin' ),
        'title-date-visible'            => esc_html__( 'Title + Date Visible', 'wpsp_admin' ),
        'slideup-title-white'           => esc_html__( 'Slide-Up Title White', 'wpsp_admin' ),
        'slideup-title-black'           => esc_html__( 'Slide-Up Title Black', 'wpsp_admin' ),
        'category-tag'                  => esc_html__( 'Category Tag', 'wpsp_admin' ),
    );

    /*
     * ---> END OTHER VARIABLE
     */

    /*
     * ---> START HELP TABS
     */

    $tabs = array(
        array(
            'id'      => 'redux-help-tab-1',
            'title'   => __( 'Theme Information 1', 'admin_folder' ),
            'content' => __( '<p>This is the tab content, HTML is allowed.</p>', 'admin_folder' )
        ),
        array(
            'id'      => 'redux-help-tab-2',
            'title'   => __( 'Theme Information 2', 'admin_folder' ),
            'content' => __( '<p>This is the tab content, HTML is allowed.</p>', 'admin_folder' )
        )
    );
    Redux::setHelpTab( $opt_name, $tabs );

    // Set the help sidebar
    $content = __( '<p>This is the sidebar content, HTML is allowed.</p>', 'admin_folder' );
    Redux::setHelpSidebar( $opt_name, $content );


    /*
     * <--- END HELP TABS
     */


    /*
     *
     * ---> START SECTIONS
     *
     */

    // General section
    Redux::setSection( $opt_name, array(
        'title'            => __( 'General', 'wpsp-redux-framework' ),
        'id'               => 'general-options',
        'desc'             => __( '', 'wpsp-redux-framework' ),
        'customizer_width' => '400px',
        'icon'             => 'el el-cog'
    ) );
    Redux::setSection( $opt_name, array(
        'title'      => __( 'Social Sharing', 'wpsp-redux-framework' ),
        'id'         => 'social-sharing',
        'subsection' => true,
        //'desc'       => __( 'Use for any post that do not have post featured image with landscape, portrait and square', 'wpsp-redux-framework' ),
        'fields'     => array(
            array(
                'id'       => 'social-share-sites',
                'type'     => 'checkbox',
                'multi'    => true,
                'title'    => __( 'Social share site', 'wpsp-redux-framework' ),
                'subtitle' => __( 'checked website to be display', 'wpsp-redux-framework' ),
                'options'  => $sites_sharing
            ),
            array(
                'id'       => 'social-share-position',
                'type'     => 'select',
                'title'    => __( 'Position', 'wpsp-redux-framework' ),
                'options'  => array(
                        'horizontal'   => esc_html__( 'Horizontal', 'wpsp-redux-framework' ),
                        'vertical'   => esc_html__( 'Vertical', 'wpsp-redux-framework' ),
                    ),
                'default' => 'horizontal',
            ),
             array(
                'id'       => 'is-social-share-heading',
                'type'     => 'switch',
                'title'    => __( 'Enable/disable heading', 'wpsp-redux-framework' ),
                'default'  => true,
            ),
            array(
                'id'       => 'social-share-heading',
                'type'     => 'text',
                'title'    => __( 'Heading on Posts', 'wpsp-redux-framework' ),
                'default'  => __( 'Please Share This', 'wpsp-redux-framework' ),
            ),
            array(
                'id'       => 'social-share-style',
                'type'     => 'select',
                'title'    => __( 'Style', 'wpsp-redux-framework' ),
                'options'  => array(
                        'flat'   => esc_html__( 'Flat', 'wpsp-redux-framework' ),
                        'minimal'   => esc_html__( 'Minimal', 'wpsp-redux-framework' ),
                        'three-d'   => esc_html__( '3D', 'wpsp-redux-framework' ),
                    ),
                'default' => 'flat',
            ),
            array(
                'id'       => 'social-share-twitter-handle',
                'type'     => 'text',
                'title'    => __( 'Twitter Handle', 'wpsp-redux-framework' ),
                'subtitle' => __( 'Twitter user name/id', 'wpsp-redux-framework' ),
            ),
            array(
                'id'       => 'social-share-pages',
                'type'     => 'checkbox',
                'title'    => __( 'Enable for Pages', 'wpsp-redux-framework' ),
                'subtitle' => __( 'Enable/disable for page', 'wpsp-redux-framework' ),
                'default'  => '0'// 1 = on | 0 = off
            ),
        )
    ) );

    // Pages
    Redux::setSection( $opt_name, array(
        'title'            => __( 'Pages', 'wpsp-redux-framework' ),
        'id'               => 'pages-options',
        'desc'             => __( '', 'wpsp-redux-framework' ),
        'customizer_width' => '400px',
        'icon'             => 'el el-file'
    ) );
    Redux::setSection( $opt_name, array(
        'title'      => __( 'Settings', 'wpsp-redux-framework' ),
        'id'         => 'page-single-tab',
        'subsection' => true,
        //'desc'       => __( 'Use for any post that do not have post featured image with landscape, portrait and square', 'wpsp-redux-framework' ),
        'fields'     => array(
            array(
                'id'       => 'is-pages-custom-sidebar',
                'type'     => 'checkbox',
                'title'    => __( 'Enable/Disable page sidebar', 'wpsp-redux-framework' ),
                'desc'     => __( 'Show page sidebar on/off', 'wpsp-redux-framework' ),
                'default'  => '1'// 1 = on | 0 = off
            ),
            array(
                'id'       => 'is-page-comments',
                'type'     => 'checkbox',
                'title'    => __( 'Enable/Disable comment on pages', 'wpsp-redux-framework' ),
                'default'  => '0'// 1 = on | 0 = off
            ),
            array(
                'id'       => 'is-page-featured-image',
                'type'     => 'checkbox',
                'title'    => __( 'Display Featured Images', 'wpsp-redux-framework' ),
                'default'  => '0'// 1 = on | 0 = off
            ),
        )
    ) );

    // Blog section
    Redux::setSection( $opt_name, array(
        'title'            => __( 'Blog', 'wpsp-redux-framework' ),
        'id'               => 'blog-options',
        'desc'             => __( '', 'wpsp-redux-framework' ),
        'customizer_width' => '400px',
        'icon'             => 'el el-file-edit'
    ) );
    Redux::setSection( $opt_name, array(
        'title'      => __( 'Single', 'wpsp-redux-framework' ),
        'id'         => 'blog-single-option',
        'subsection' => true,
        //'desc'       => __( 'Use for any post that do not have post featured image with landscape, portrait and square', 'wpsp-redux-framework' ),
        'fields'     => array(
            array(
                'id'       => 'blog-single-header',
                'type'     => 'select',
                'title'    => __( 'Header Displays', 'wpsp-redux-framework' ),
                'options'  => array(
                    'custom_text' => 'Custom Text',
                    'post_title' => 'Post title',
                    'first_category' => 'First Category',
                ),
                'default'  => 'custom_text'
            ),
            array(
                'id'       => 'is-featured-image-lightbox',
                'type'     => 'checkbox',
                'title'    => __( 'Featured image lightbox', 'redux-framework-wpsp' ),
                'subtitle' => __( 'Enable/disable featured image lightbox', 'redux-framework-wpsp' ),
                'default'  => '0'// 1 = on | 0 = off
            ),
            array(
                'id'       => 'is-featured-image-caption',
                'type'     => 'checkbox',
                'title'    => __( 'Featured image caption', 'redux-framework-wpsp' ),
                'subtitle' => __( 'Enable/disable featured image caption', 'redux-framework-wpsp' ),
                'default'  => '0'// 1 = on | 0 = off
            ),
            array(
                'id'       => 'is-featured-image-caption',
                'type'     => 'checkbox',
                'title'    => __( 'Featured image caption', 'redux-framework-wpsp' ),
                'subtitle' => __( 'Enable/disable featured image caption', 'redux-framework-wpsp' ),
                'default'  => '0'// 1 = on | 0 = off
            ),
            array(
                'id'       => 'is-blog-next-prev',
                'type'     => 'checkbox',
                'title'    => __( 'Next & Previous Links', 'redux-framework-wpsp' ),
                'subtitle' => __( 'Enable/disable Next & Previous Post Links', 'redux-framework-wpsp' ),
                'default'  => '0'// 1 = on | 0 = off
            ),
            array(
                'id'       => 'blog-post-meta-sections',
                'type'     => 'checkbox',
                'title'    => __( 'Meta', 'redux-framework-wpsp' ),
                'subtitle' => __( 'checked meta filed to be display', 'redux-framework-wpsp' ),
                'options'  => $entry_meta_choices
            ),
            array(
                'id'       => 'is-related-blog-post',
                'type'     => 'switch',
                'title'    => __( 'Enable/disable related posts', 'redux-framework-wpsp' ),
                'default'  => false,
            ),
            array(
                'id'       => 'related-post-title',
                'type'     => 'text',
                'required' => array( 'is-related-blog-post', '=', '1' ),
                'title'    => __( 'Related Posts Title', 'redux-framework-wpsp' ),
                'default'  => __( 'Related Posts', 'redux-framework-wpsp' ),
            ),
            array(
                'id'       => 'related-blog-post-count',
                'type'     => 'select',
                'required' => array( 'is-related-blog-post', '=', '1' ),
                'title'    => __( 'Related Posts Count', 'redux-framework-wpsp' ),
                'subtitle' => __( 'set number of related post', 'redux-framework-wpsp' ),
                'options'  => $el_number,
                'default'  => '3'
            ),
            array(
                'id'       => 'related-blog-post-columns',
                'type'     => 'select',
                'required' => array( 'is-related-blog-post', '=', '1' ),
                'title'    => __( 'Related Posts Columns', 'redux-framework-wpsp' ),
                'subtitle' => __( 'set number of column to display related post', 'redux-framework-wpsp' ),
                'options'  => $el_number,
                'default'  => '3'
            ),
            array(
                'id'       => 'blog-related-overlay',
                'type'     => 'select',
                'required' => array( 'is-related-blog-post', '=', '1' ),
                'title'    => __( 'Related Posts Image Overlay', 'redux-framework-wpsp' ),
                'subtitle' => __( 'set overlay style for each posts', 'redux-framework-wpsp' ),
                'options'  => $wpsp_overlay_styles_array,
            ),
            array(
                'id'       => 'is-blog-related-excerpt',
                'type'     => 'checkbox',
                'required' => array( 'is-related-blog-post', '=', '1' ),
                'title'    => __( 'Related Posts Excerpt', 'redux-framework-wpsp' ),
                'subtitle' => __( 'Show/hide post excerpt', 'redux-framework-wpsp' ),
                'default'  => '1'// 1 = on | 0 = off
            ),
            array(
                'id'       => 'blog-related-excerpt-length',
                'type'     => 'text',
                'required' => array( 'is-related-blog-post', '=', '1' ),
                'title'    => __( 'Related Posts Excerpt Length', 'redux-framework-wpsp' ),
                'default'  => '15'// 1 = on | 0 = off
            ),
        )
    ) );

    // Search
    Redux::setSection( $opt_name, array(
        'title'            => __( 'Search', 'wpsp-redux-framework' ),
        'id'               => 'search-options',
        'desc'             => __( '', 'wpsp-redux-framework' ),
        'customizer_width' => '400px',
        'icon'             => 'el el-search'
    ) );
    Redux::setSection( $opt_name, array(
        'title'      => __( 'Settings', 'wpsp-redux-framework' ),
        'id'         => 'search-tab',
        'subsection' => true,
        //'desc'       => __( 'Use for any post that do not have post featured image with landscape, portrait and square', 'wpsp-redux-framework' ),
        'fields'     => array(
            array(
                'id'       => 'search-layout',
                'type'     => 'image_select',
                'title'    => __( 'Search layout', 'wpsp-redux-framework' ),
                'subtitle' => __( '', 'wpsp-redux-framework' ),
                'desc'     => __( 'Other layouts will override this option if they are set', 'wpsp-redux-framework' ),
                //Must provide key => value(array:title|img) pairs for radio options
                'options'  => array(
                    'col-1c' => array(
                        'alt' => '1 Column',
                        'img' => ReduxFramework::$_url . 'assets/img/1col.png'
                    ),
                    'col-2cl' => array(
                        'alt' => '2 Column Left',
                        'img' => ReduxFramework::$_url . 'assets/img/2cl.png'
                    ),
                    'col-2cr' => array(
                        'alt' => '2 Column Right',
                        'img' => ReduxFramework::$_url . 'assets/img/2cr.png'
                    )
                ),
                'default'  => 'col-1c',
            ),
            array(
                'id'       => 'search-posts-per-page',
                'type'     => 'text',
                'title'    => __( 'Posts Per Page', 'wpsp-redux-framework' ),
                'validate' => 'preg_replace',
                'preg'     => array(
                    'pattern'     => '/[^0-9]/s',
                    'replacement' => 'Allow only number'
                ),
                'default'  => '10',
            ),
            array(
                'id'       => 'is-search-custom-sidebar',
                'type'     => 'checkbox',
                'title'    => __( 'Enable/Disable search sidebar', 'wpsp-redux-framework' ),
                'desc'     => __( 'Show search sidebar on/off', 'wpsp-redux-framework' ),
                'default'  => '1'// 1 = on | 0 = off
            ),
        )
    ) );

    // Sidebar
    Redux::setSection( $opt_name, array(
        'title'            => __( 'Sidebar', 'wpsp-redux-framework' ),
        'id'               => 'sidebar-options',
        'desc'             => __( '', 'wpsp-redux-framework' ),
        'customizer_width' => '400px',
        'icon'             => 'el el-website'
    ) );
    Redux::setSection( $opt_name, array(
        'title'      => __( 'Default', 'wpsp-redux-framework' ),
        'id'         => 'default-sidebar',
        'subsection' => true,
        //'desc'       => __( 'Use for any post that do not have post featured image with landscape, portrait and square', 'wpsp-redux-framework' ),
        'fields'     => array(
            array(
                'id'       => 'sidebar-headings',
                'type'     => 'select',
                'title'    => __( 'Sidebar Widget Title Headings', 'wpsp-redux-framework' ),
                'options'  => $widget_tags,
                'default'  => 'div'
            ),
        )
    ) );
    Redux::setSection( $opt_name, array(
        'title'      => __( 'Footer Widget', 'wpsp-redux-framework' ),
        'id'         => 'footer-widget',
        'subsection' => true,
        //'desc'       => __( 'Use for any post that do not have post featured image with landscape, portrait and square', 'wpsp-redux-framework' ),
        'fields'     => array(
            array(
                'id'       => 'is-footer-widgets',
                'type'     => 'checkbox',
                'title'    => __( 'Footer Widgets', 'wpsp-redux-framework' ),
                'desc'     => __( 'If you disable this option we recommend you go to the Customizer Manager and disable the section as well so the next time you work with the Customizer it will load faster.', 'wpsp-redux-framework' ),
                'default'  => '1'// 1 = on | 0 = off
            ),
            array(
                'id'       => 'footer-headings',
                'type'     => 'select',
                'title'    => __( 'Footer Widget Title Headings', 'wpsp-redux-framework' ),
                'options'  => $widget_tags,
                'default'  => 'div'
            ),
            array(
                'id'       => 'footer-widgets-columns',
                'type'     => 'select',
                'title'    => __( 'Columns', 'wpsp-redux-framework' ),
                'options'  => $el_number,
                'default'  => '4',
            ),
        )
    ) );
    
    // Global templates for pages, post, custom post, arhcive, category and taxonomy
    Redux::setSection( $opt_name, array(
        'title'            => __( 'Template', 'wpsp-redux-framework' ),
        'id'               => 'basic-template',
        'desc'             => __( 'These are really basic fields!', 'wpsp-redux-framework' ),
        'customizer_width' => '400px',
        'icon'             => 'el el-website'
    ) );

    Redux::setSection( $opt_name, array(
        'title'      => __( 'Layout', 'wpsp-redux-framework' ),
        'id'         => 'global-layout',
        'subsection' => true,
        'desc'       => __( 'Manage page layout with fullwide, left sidebar and right sidebar', 'wpsp-redux-framework' ),
        'fields'     => array(
            array(
                'id'       => 'layout-global',
                'type'     => 'image_select',
                'title'    => __( 'Global layout', 'wpsp-redux-framework' ),
                'subtitle' => __( 'Layout for all pages, posts and custom post', 'wpsp-redux-framework' ),
                'desc'     => __( 'Other layouts will override this option if they are set', 'wpsp-redux-framework' ),
                //Must provide key => value(array:title|img) pairs for radio options
                'options'  => array(
                    'col-1c' => array(
                        'alt' => '1 Column',
                        'img' => ReduxFramework::$_url . 'assets/img/1col.png'
                    ),
                    'col-2cl' => array(
                        'alt' => '2 Column Left',
                        'img' => ReduxFramework::$_url . 'assets/img/2cl.png'
                    ),
                    'col-2cr' => array(
                        'alt' => '2 Column Right',
                        'img' => ReduxFramework::$_url . 'assets/img/2cr.png'
                    )
                ),
                'default'  => 'col-1c',
            ),
            array(
                'id'       => 'single-layout',
                'type'     => 'image_select',
                'title'    => __( 'Single', 'wpsp-redux-framework' ),
                'subtitle' => __( 'Layout for single post', 'wpsp-redux-framework' ),
                'desc'     => __( '[ is_single ] Single post layout - If a post has a set layout, it will override this.', 'wpsp-redux-framework' ),
                'options'  => array(
                    'inherit' => array(
                        'alt' => 'Inherit Global Layout',
                        'img' => get_template_directory_uri() . '/images/admin/layout-off.png'
                    ),
                    'col-1c' => array(
                        'alt' => '1 Column',
                        'img' => ReduxFramework::$_url . 'assets/img/1col.png'
                    ),
                    'col-2cl' => array(
                        'alt' => '2 Column Left',
                        'img' => ReduxFramework::$_url . 'assets/img/2cl.png'
                    ),
                    'col-2cr' => array(
                        'alt' => '2 Column Right',
                        'img' => ReduxFramework::$_url . 'assets/img/2cr.png'
                    )
                ),
                'default'  => 'inherit',
            ),
            array(
                'id'       => 'archive-layout',
                'type'     => 'image_select',
                'title'    => __( 'Archive', 'wpsp-redux-framework' ),
                'subtitle' => __( 'Layout for archive page', 'wpsp-redux-framework' ),
                'desc'     => __( '[ is_archive ] Category, date, tag and author archive layout', 'wpsp-redux-framework' ),
                'options'  => array(
                    'inherit' => array(
                        'alt' => 'Inherit Global Layout',
                        'img' => get_template_directory_uri() . '/images/admin/layout-off.png'
                    ),
                    'col-1c' => array(
                        'alt' => '1 Column',
                        'img' => ReduxFramework::$_url . 'assets/img/1col.png'
                    ),
                    'col-2cl' => array(
                        'alt' => '2 Column Left',
                        'img' => ReduxFramework::$_url . 'assets/img/2cl.png'
                    ),
                    'col-2cr' => array(
                        'alt' => '2 Column Right',
                        'img' => ReduxFramework::$_url . 'assets/img/2cr.png'
                    )
                ),
                'default'  => 'inherit',
            ),
            array(
                'id'       => 'category-layout',
                'type'     => 'image_select',
                'title'    => __( 'Archive — Category', 'wpsp-redux-framework' ),
                'subtitle' => __( 'Layout for each categories', 'wpsp-redux-framework' ),
                'desc'     => __( '[ is_category ] Category archive layout', 'wpsp-redux-framework' ),
                'options'  => array(
                    'inherit' => array(
                        'alt' => 'Inherit Global Layout',
                        'img' => get_template_directory_uri() . '/images/admin/layout-off.png'
                    ),
                    'col-1c' => array(
                        'alt' => '1 Column',
                        'img' => ReduxFramework::$_url . 'assets/img/1col.png'
                    ),
                    'col-2cl' => array(
                        'alt' => '2 Column Left',
                        'img' => ReduxFramework::$_url . 'assets/img/2cl.png'
                    ),
                    'col-2cr' => array(
                        'alt' => '2 Column Right',
                        'img' => ReduxFramework::$_url . 'assets/img/2cr.png'
                    )
                ),
                'default'  => 'inherit',
            ),
            array(
                'id'       => 'search-layout',
                'type'     => 'image_select',
                'title'    => __( 'Search', 'wpsp-redux-framework' ),
                'subtitle' => __( 'Layout for search page', 'wpsp-redux-framework' ),
                'desc'     => __( '[ is_search ] Search page layout', 'wpsp-redux-framework' ),
                'options'  => array(
                    'inherit' => array(
                        'alt' => 'Inherit Global Layout',
                        'img' => get_template_directory_uri() . '/images/admin/layout-off.png'
                    ),
                    'col-1c' => array(
                        'alt' => '1 Column',
                        'img' => ReduxFramework::$_url . 'assets/img/1col.png'
                    ),
                    'col-2cl' => array(
                        'alt' => '2 Column Left',
                        'img' => ReduxFramework::$_url . 'assets/img/2cl.png'
                    ),
                    'col-2cr' => array(
                        'alt' => '2 Column Right',
                        'img' => ReduxFramework::$_url . 'assets/img/2cr.png'
                    )
                ),
                'default'  => 'inherit',
            ),
            array(
                'id'       => '404-layout',
                'type'     => 'image_select',
                'title'    => __( 'Error 404', 'wpsp-redux-framework' ),
                'subtitle' => __( 'Layout for 404 error page', 'wpsp-redux-framework' ),
                'desc'     => __( '[ is_404 ] Error 404 page layout', 'wpsp-redux-framework' ),
                'options'  => array(
                    'inherit' => array(
                        'alt' => 'Inherit Global Layout',
                        'img' => get_template_directory_uri() . '/images/admin/layout-off.png'
                    ),
                    'col-1c' => array(
                        'alt' => '1 Column',
                        'img' => ReduxFramework::$_url . 'assets/img/1col.png'
                    ),
                    'col-2cl' => array(
                        'alt' => '2 Column Left',
                        'img' => ReduxFramework::$_url . 'assets/img/2cl.png'
                    ),
                    'col-2cr' => array(
                        'alt' => '2 Column Right',
                        'img' => ReduxFramework::$_url . 'assets/img/2cr.png'
                    )
                ),
                'default'  => 'inherit',
            ),
            array(
                'id'       => 'page-layout',
                'type'     => 'image_select',
                'title'    => __( 'Pages layout', 'wpsp-redux-framework' ),
                'subtitle' => __( 'Layout for all Pages', 'wpsp-redux-framework' ),
                'desc'     => __( 'Other layouts will override this option if they are set', 'wpsp-redux-framework' ),
                //Must provide key => value(array:title|img) pairs for radio options
                'options'  => array(
                    'inherit' => array(
                        'alt' => 'Inherit Global Layout',
                        'img' => get_template_directory_uri() . '/images/admin/layout-off.png'
                    ),
                    'col-1c' => array(
                        'alt' => '1 Column',
                        'img' => ReduxFramework::$_url . 'assets/img/1col.png'
                    ),
                    'col-2cl' => array(
                        'alt' => '2 Column Left',
                        'img' => ReduxFramework::$_url . 'assets/img/2cl.png'
                    ),
                    'col-2cr' => array(
                        'alt' => '2 Column Right',
                        'img' => ReduxFramework::$_url . 'assets/img/2cr.png'
                    )
                ),
                'default'  => 'inherit',
            ),
        )
    ) );

    Redux::setSection( $opt_name, array(
        'title'      => __( 'Sidebar', 'wpsp-redux-framework' ),
        'id'         => 'global-sidebar',
        'subsection' => true,
        'desc'       => __( 'Apply it on any pages and posts', 'wpsp-redux-framework' ),
        'fields'     => array( 
            array(
                'id'       => 'sidebar-single',
                'type'     => 'select',
                'data'     => 'sidebar',
                'title'    => __( 'Single', 'wpsp-redux-framework' ),
                'subtitle' => __( 'Sidebar for single post', 'wpsp-redux-framework' ),
                'desc'     => __( '[ is_single ] Primary - If a single post has a unique sidebar, it will override this.', 'wpsp-redux-framework' ),
            ),
            array(
                'id'       => 'sidebar-archive',
                'type'     => 'select',
                'data'     => 'sidebar',
                'title'    => __( 'Archive', 'wpsp-redux-framework' ),
                'subtitle' => __( 'Sidebar for archive page', 'wpsp-redux-framework' ),
                'desc'     => __( '[ is_archive ] Primary', 'wpsp-redux-framework' ),
            ),
            array(
                'id'       => 'sidebar-category',
                'type'     => 'select',
                'data'     => 'sidebar',
                'title'    => __( 'Archive — Category', 'wpsp-redux-framework' ),
                'subtitle' => __( 'Sidebar for each categories', 'wpsp-redux-framework' ),
                'desc'     => __( '[ is_category ] Primary', 'wpsp-redux-framework' ),
            ),
            array(
                'id'       => 'sidebar-search',
                'type'     => 'select',
                'data'     => 'sidebar',
                'title'    => __( 'Search', 'wpsp-redux-framework' ),
                'subtitle' => __( 'Sidebar for search page', 'wpsp-redux-framework' ),
                'desc'     => __( '[ <strong>is_search</strong> ] Primary', 'wpsp-redux-framework' ),
            ),
            array(
                'id'       => 'sidebar-404',
                'type'     => 'select',
                'data'     => 'sidebar',
                'title'    => __( 'Error 404', 'wpsp-redux-framework' ),
                'subtitle' => __( 'Sidebar for 404 Error page', 'wpsp-redux-framework' ),
                'desc'     => __( '[ <strong>is_404</strong> ] Primary', 'wpsp-redux-framework' ),
            ),
            array(
                'id'       => 'sidebar-page',
                'type'     => 'select',
                'data'     => 'sidebar',
                'title'    => __( 'Page sidebar', 'wpsp-redux-framework' ),
                'subtitle' => __( 'Sidebar for all Pages', 'wpsp-redux-framework' ),
                'desc'     => __( 'Other sidebar will override this option if they are set', 'wpsp-redux-framework' ),
            ),
        )
    ) );

    Redux::setSection( $opt_name, array(
        'title'      => __( 'Placeholder', 'wpsp-redux-framework' ),
        'id'         => 'placehodler-option',
        'subsection' => true,
        'desc'       => __( 'Use for any post that do not have post featured image with landscape, portrait and square', 'wpsp-redux-framework' ),
        'fields'     => array(
            array(
                'id'       => 'landscape-placeholder',
                'type'     => 'media',
                'title'    => __( 'Landscape Placeholder', 'wpsp-redux-framework' ),
                'subtitle' => __( 'Use for any post that do not have post featured image.', 'wpsp-redux-framework' ),
                'desc'     => __( 'Recommended size 960px by 625px', 'wpsp-redux-framework' ),
                'default'  => array(
                    'url' => get_template_directory_uri() . '/images/thumbnail-landscape.gif'
                    )
            ),
            array(
                'id'       => 'portrait-placeholder',
                'type'     => 'media',
                'title'    => __( 'Portrait Placeholder', 'wpsp-redux-framework' ),
                'subtitle' => __( 'Use for publication post that do not have post featured image.', 'wpsp-redux-framework' ),
                'desc'     => __( 'Recommended size 480px by 691px', 'wpsp-redux-framework' ),
                'default'  => array(
                    'url' => get_template_directory_uri() . '/images/thumbnail-portrait.gif'
                    )
            ),
            array(
                'id'       => 'square-placeholder',
                'type'     => 'media',
                'title'    => __( 'Square Placeholder', 'wpsp-redux-framework' ),
                'subtitle' => __( 'Use for staff post that do not have post featured image.', 'wpsp-redux-framework' ),
                'desc'     => __( 'Recommended size 480px by 480px', 'wpsp-redux-framework' ),
                'default'  => array(
                    'url' => get_template_directory_uri() . '/images/thumbnail-square.gif'
                    )
            ),
        )
    ) );            
    /*
     * <--- END SECTIONS
     */
