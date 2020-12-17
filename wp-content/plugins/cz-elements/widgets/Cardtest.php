<?php

namespace czElements\Widgets\CardTest;

use Elementor\Widget_Base;

<font></font>
/**<font></font>
 * Elementor cardtest Widget.<font></font>
 *<font></font>
 * Elementor widget that inserts an embbedable content into the page, from any given URL.<font></font>
 *<font></font>
 * @since 1.0.0<font></font>
 */<font></font>
class Elementor_cardtest_Widget extends \Elementor\Widget_Base {<font></font>
<font></font>
	/**<font></font>
	 * Get widget name.<font></font>
	 *<font></font>
	 * Retrieve oEmbed widget name.<font></font>
	 *<font></font>
	 * @since 1.0.0<font></font>
	 * @access public<font></font>
	 *<font></font>
	 * @return string Widget name.<font></font>
	 */<font></font>
	public function get_name() {<font></font>
		return 'cardtest';<font></font>
	}<font></font>
<font></font>
	/**<font></font>
	 * Get widget title.<font></font>
	 *<font></font>
	 * Retrieve oEmbed widget title.<font></font>
	 *<font></font>
	 * @since 1.0.0<font></font>
	 * @access public<font></font>
	 *<font></font>
	 * @return string Widget title.<font></font>
	 */<font></font>
	public function get_title() {<font></font>
		return __( 'cardtest', 'czElements' );<font></font>
	}<font></font>
<font></font>
	/**<font></font>
	 * Get widget icon.<font></font>
	 *<font></font>
	 * Retrieve oEmbed widget icon.<font></font>
	 *<font></font>
	 * @since 1.0.0<font></font>
	 * @access public<font></font>
	 *<font></font>
	 * @return string Widget icon.<font></font>
	 */<font></font>
	public function get_icon() {<font></font>
		return 'fa fa-snowflake-o';<font></font>
	}<font></font>
<font></font>
	/**<font></font>
	 * Get widget categories.<font></font>
	 *<font></font>
	 * Retrieve the list of categories the oEmbed widget belongs to.<font></font>
	 *<font></font>
	 * @since 1.0.0<font></font>
	 * @access public<font></font>
	 *<font></font>
	 * @return array Widget categories.<font></font>
	 */<font></font>
	public function get_categories() {<font></font>
		return [ 'general' ];<font></font>
	}<font></font>
<font></font>
	/**<font></font>
	 * Register oEmbed widget controls.<font></font>
	 *<font></font>
	 * Adds different input fields to allow the user to change and customize the widget settings.<font></font>
	 *<font></font>
	 * @since 1.0.0<font></font>
	 * @access protected<font></font>
	 */<font></font>
	protected function _register_controls() {<font></font>
<font></font>
		$this->start_controls_section(<font></font>
			'content_section',<font></font>
			[<font></font>
				'label' => __( 'Content', 'czElements' ),<font></font>
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,<font></font>
			]<font></font>
		);<font></font>
<font></font>
		$this->add_control(<font></font>
			'url',<font></font>
			[<font></font>
				'label' => __( 'URL to embed', 'czElements' ),<font></font>
				'type' => \Elementor\Controls_Manager::TEXT,<font></font>
				'input_type' => 'url',<font></font>
				'placeholder' => __( 'https://your-link.com', 'czElements' ),<font></font>
			]<font></font>
		);<font></font>
<font></font>
		$this->end_controls_section();<font></font>
<font></font>
	}<font></font>
<font></font>
	/**<font></font>
	 * Render oEmbed widget output on the frontend.<font></font>
	 *<font></font>
	 * Written in PHP and used to generate the final HTML.<font></font>
	 *<font></font>
	 * @since 1.0.0<font></font>
	 * @access protected<font></font>
	 */<font></font>
	protected function render() {<font></font>
<font></font>
		$settings = $this->get_settings_for_display();<font></font>
<font></font>
		$html = wp_oembed_get( $settings['url'] );<font></font>
<font></font>
		echo '<div class="oembed-elementor-widget">';<font></font>
<font></font>
		echo ( $html ) ? $html : $settings['url'];<font></font>
<font></font>
		echo '</div>';<font></font>
<font></font>
	}<font></font>
<font></font>
}<font></font>
