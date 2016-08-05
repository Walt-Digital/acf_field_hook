<?php

// exit if accessed directly
if( ! defined( 'ABSPATH' ) ) exit;


// check if class already exists
if( !class_exists('acf_field_hook') ) :


class acf_field_hook extends acf_field {


	/*
	*  __construct
	*
	*  This function will setup the field type data
	*
	*  @type	function
	*  @date	5/03/2014
	*  @since	5.0.0
	*
	*  @param	n/a
	*  @return	n/a
	*/

	function __construct( $settings ) {

		/*
		*  name (string) Single word, no spaces. Underscores allowed
		*/

		$this->name = 'hook';


		/*
		*  label (string) Multiple words, can include spaces, visible when selecting a field type
		*/

		$this->label = 'Hook';


		/*
		*  category (string) basic | content | choice | relational | jquery | layout | CUSTOM GROUP NAME
		*/

		$this->category = 'Special';


		/*
		*  defaults (array) Array of default settings which are merged into the field object. These are used later in settings
		*/

		$this->defaults = array(
			'hook'	=> '',
		);


		/*
		*  l10n (array) Array of strings that are used in JavaScript. This allows JS strings to be translated in PHP and loaded via:
		*  var message = acf._e('hook', 'error');
		*/

		$this->l10n = array(
			'error'	=> __('Error! Please enter a higher value', 'acf-hook'),
		);


		/*
		*  settings (array) Store plugin settings (url, path, version) as a reference for later use with assets
		*/

		$this->settings = $settings;


		// do not delete!
    	parent::__construct();

	}


	function render_field_settings( $field ) {

		acf_render_field_setting( $field, array(
			'label'			=> 'Hook',
			'instructions'	=> "Entrez le nom d'un hook utilisé dans votre thème",
			'type'			=> 'text',
			'name'			=> 'hook'
		));

	}


	function render_field( $field )
    {
        do_action($field['hook']);
	}





	function input_admin_footer()
    {
        do_action('acf_hook_footer');
	}




	function input_admin_enqueue_scripts()
    {
        do_action('acf_hook_scripts');
	}






	function input_admin_head()
    {
        do_action('acf_hook_head');
	}





}


// initialize
new acf_field_hook( $this->settings );


// class_exists check
endif;

?>
