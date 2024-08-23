<?php

function ppm_quickstart_woocommerce_setup() {
    add_theme_support(
        'woocommerce',
        array(
            'thumbnail_image_width' => 800,
            'single_image_width'    => 1200,
            'product_grid'          => array(
                'default_rows'    => 3,
                'min_rows'        => 1,
                'default_columns' => 4,
                'min_columns'     => 1,
                'max_columns'     => 6,
            ),
        )
    );
    //add_theme_support( 'wc-product-gallery-zoom' );
    //add_theme_support( 'wc-product-gallery-lightbox' );
    add_theme_support( 'wc-product-gallery-slider' );
}
add_action( 'after_setup_theme', 'ppm_quickstart_woocommerce_setup' );

/**
 * Remove default WooCommerce wrapper.
 */
remove_action( 'woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10 );
remove_action( 'woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10 );

if ( ! function_exists( 'ppm_quickstart_woocommerce_wrapper_before' ) ) {
    /**
     * Before Content.
     *
     * Wraps all WooCommerce content in wrappers which match the theme markup.
     *
     * @return void
     */
    function ppm_quickstart_woocommerce_wrapper_before() {
        ?>
        <div class="content-block">
            <div class="elementor-section elementor-section-boxed">
                <div class="elementor-container">
                    <div class="internal-content-wrap ppm-woocommerce-wrap">
                        <main id="primary" class="site-main">
        <?php
    }
}
add_action( 'woocommerce_before_main_content', 'ppm_quickstart_woocommerce_wrapper_before' );

if ( ! function_exists( 'ppm_quickstart_woocommerce_wrapper_after' ) ) {
    /**
     * After Content.
     *
     * Closes the wrapping divs.
     *
     * @return void
     */
    function ppm_quickstart_woocommerce_wrapper_after() {
        ?>
                        </main><!-- #main -->
                    </div>
                </div>
            </div>
        </div>
        <?php
    }
}
add_action( 'woocommerce_after_main_content', 'ppm_quickstart_woocommerce_wrapper_after' );

remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_output_related_products', 20 );

function ppm_disable_woo_commerce_sidebar() {
    remove_action( 'woocommerce_sidebar', 'woocommerce_get_sidebar', 10);
}
add_action('init', 'ppm_disable_woo_commerce_sidebar');


// add custom product tabs from product metabox
function ppm_quickstart_woocommerce_product_tabs( $tabs ) {
    $product_tabs = get_post_meta( get_the_ID(), 'tabs', true );

    if ( ! empty( $product_tabs ) ) {
        foreach ( $product_tabs as $product_tab ) {
            $tabs[] = array(
                'title'    => $product_tab['title'],
                'priority' => 50,
                'callback' => function() use ( $product_tab ) {
                    echo '<div class="gff-product-tab-content">
                        <div class="gff-product-tab-content-inner">
                            '.wpautop( $product_tab['content'] ).'
                        </div>
                        
                        <div class="gff-product-tab-content-image">
                            '.get_the_post_thumbnail(get_the_ID(), 'medium').'
                        </div>
                    </div>';
                }
            );
        }
    }

    unset( $tabs['description'] );
    unset( $tabs['reviews'] );
    unset( $tabs['additional_information'] );
    return $tabs;
}
add_filter( 'woocommerce_product_tabs', 'ppm_quickstart_woocommerce_product_tabs' );


function ppm_woocommerce_before_shop_loop() {
    // check if this is a category archive

    $html = '';
    if(is_product_category()) {
        $category_id = get_queried_object_id();
        $category = get_term($category_id, 'product_cat');

        if($category && $category->parent != 0) {
            $parent = get_term($category->parent, 'product_cat');
            $thumbnail_id = get_term_meta( $parent->term_id, 'thumbnail_id', true );
            $html .= '
            <style>
                .elementor.elementor-539.elementor-location-archive.product > section.hide-header {
                    display: none;
                }
            </style>
            <div class="parent-details-info">
                <div class="parent-category-info">
                    <h3>'.$parent->name.'</h3>
                    '.wpautop($parent->description).'
                </div>';
            
                $html .='
                <div class="parent-category-image">
                    <img src="'.wp_get_attachment_url($thumbnail_id, 'large').'" alt="">
                </div>';
                
            $html .= '</div>';
            $parent_id = $category->parent;
            $show_all = true;
        } else {
            // get childs
            $parent_id = $category_id;
            $show_all = false;
        }


        $args = array(
            'taxonomy' => 'product_cat',
            'parent' => $parent_id,
            'hide_empty' => false
        );

        $categories = get_categories($args);
        if($categories) {
            $html .= '<ul class="gff-product-filter">';

            if($show_all) {
                $html .= '<li><a href="'.get_term_link($parent_id).'">All</a></li>';
            }

            foreach($categories as $category) {
                if(get_queried_object_id() == $category->term_id) {
                    $style = 'style="color:#000"';
                } else {
                    $style = '';
                }
                $html .= '<li><a '.$style.' href="'.get_term_link($category->term_id).'">'.$category->name.'</a></li>';
            }

            $html .= '</ul>';
        }
    }

    echo $html;
}
add_filter('woocommerce_before_shop_loop', 'ppm_woocommerce_before_shop_loop');