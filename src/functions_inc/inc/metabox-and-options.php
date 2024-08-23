<?php 

if( class_exists( 'CSF' ) ) {
    $theme_options_prefix = 'ppm_theme_options';

    CSF::createOptions( $theme_options_prefix, array(
        'menu_title' => 'Theme Options',
        'framework_title' => 'Theme Options',
        'menu_slug'  => 'theme-options',
    ) );

    CSF::createSection( $theme_options_prefix, array(
        'title'  => 'General',
        'fields' => array(

            array(
                'id'    => 'phone',
                'type'  => 'text',
                'title' => 'Phone number',
            ),

        )
    ) );

    // Metaboxes

    // Page metabox
    $page_metabox_prefix = 'ppm_page_meta';
    CSF::createMetabox( $page_metabox_prefix, array(
        'title'     => 'Options',
        'post_type' => 'page',
        'data_type' => 'unserialize',
    ) );

    CSF::createSection( $page_metabox_prefix, array(
        'fields' => array(
            array(
                'id'    => 'enable_page_title',
                'type'  => 'switcher',
                'title' => 'Enable page title?',
                'default' => true,
            ),
            array(
                'id'    => 'default_padding',
                'type'  => 'switcher',
                'title' => 'Enable default padding?',
                'default' => true,
            ),
        )
    ) );

    // Product metabox
    $product_metabox_prefix = 'ppm_product_meta';
    CSF::createMetabox( $product_metabox_prefix, array(
        'title'     => 'Options',
        'post_type' => 'product',
        'data_type' => 'unserialize',
    ) );

    CSF::createSection( $product_metabox_prefix, array(
        'fields' => array(
            array(
                'id'    => 'tabs',
                'type'  => 'group',
                'title' => 'Tabs',
                'fields' => array(
                    array(
                        'id'    => 'title',
                        'type'  => 'text',
                        'title' => 'Title',
                    ),
                    array(
                        'id'    => 'content',
                        'type'  => 'wp_editor',
                        'title' => 'Content',
                    ),
                ),
            )
        )
    ) );

} else {
    function ppm_quickstart_codestar_install_notice() {
        ?>
        <div class="notice notice-warning">
            <p><strong><?php echo wp_get_theme(); ?></strong> required <strong>Codestar Framework</strong> plugin to be installed and activated on your site.</p>
        </div>
        <?php
    }
    add_action( 'admin_notices', 'ppm_quickstart_codestar_install_notice' );
}
