<?php

class PPM_Testimonials_Widget extends \Elementor\Widget_Base {

	public function get_name() {
		return 'gff-testimonials';
    }
    
	public function get_title() {
		return __( 'GFF Testimonials', 'ppm-quickstart' );
	}

	public function get_icon() {
		return 'fa fa-code';
	}

	public function get_categories() {
		return [ 'general' ];
	}

	protected function _register_controls() {


        
        $this->start_controls_section(
			'content_section',
			[
				'label' => __( 'Slides', 'plugin-name' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
        );


		$this->end_controls_section();

	}

	protected function render() {

		$settings = $this->get_settings_for_display();

        $html = '
        <script >
            jQuery(document).ready(function($) {
                $(".testimonials").slick({
                    dots: true,
                    arrows: false,
                    autoplay: true
                });
            });
        </script>
        <div class="testimonials">';
        $q = new WP_Query(['posts_per_page' => -1, 'post_type' => 'testimonial', 'orderby' => 'menu_order','order' => 'ASC']);

        while($q->have_posts()) : $q->the_post();
            $html .= '<div class="single-testimonial-item">
                '.wpautop(get_the_content()).'
                <h3>'.get_the_title().'</h3>
            </div>';
        endwhile; wp_reset_query();

        $html .= '</div>';


        echo $html;

	}

}