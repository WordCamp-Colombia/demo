<?php
/**
 * Sets the theme functions
 *
 * @package wcco
 */

 // Autoload wcco Includes.
foreach ( glob( __DIR__ . '/inc/*.php' ) as $module ) {
	if ( ! $modulepath = $module ) {
		trigger_error( sprintf( __( 'Error locating %s for inclusion', 'wcco' ), $module ), E_USER_ERROR );
	}
	require_once( $modulepath );
}

unset( $module, $filepath );

if ( ! class_exists( 'wccoSite' ) ) {
	/**
	* Theme main Class
	*/
	class wccoSite {
		function __construct() {
			$this->theme_setup();
			$this->add_actions();
      $this->add_filters();
      if ( class_exists( 'Kili_Core' ) ) {
				run_kili_core();
			}
		}
		/**
		 * Theme setup
		 *
		 * @return void
		 */
		public function theme_setup() {
			register_nav_menus( array(
				'header_navigation'	=> __( 'Header Navigation', 'koombea' )
			) );
		}

		/**
		 * Add actions to theme
		 *
		 * @return void
		 */
		public function add_actions() {
			add_action( 'wp_enqueue_scripts', array( $this, 'load_assets' ) );
		}

		/**
		 * Add filters to theme
		 *
		 * @return void
		 */
		public function add_filters() {
			if ( class_exists('Timber') ) {
				add_filter( 'timber_context', array( $this, 'theme_context' ) );
			}
		}

		/**
		 * Load theme assets
		 *
		 * @return void
		 */
		public function load_assets() {
			wp_enqueue_style( 'theme-style', get_template_directory_uri() . '/dist/styles/style.css', false, null );
		}

		/**
		 * Options for using in page context
		 *
		 * @param array $context The timber context.
		 * @return array Theme options array
		 */
		public function theme_context( $context ) {
      $context['menu']['header']	= class_exists( 'TimberMenu' ) ? new TimberMenu( 'header_navigation' ) : '';
			return $context;
		}
	}

}

// Creating the instance of main class
$wcco_site_class = new wccoSite();
