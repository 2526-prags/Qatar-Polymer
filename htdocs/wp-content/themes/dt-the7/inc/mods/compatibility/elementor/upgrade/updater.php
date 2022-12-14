<?php
/**
 * @package The7
 */

namespace The7\Mods\Compatibility\Elementor\Upgrade;

defined( 'ABSPATH' ) || exit;

class Updater {

	public function query_col( $sql ) {
		global $wpdb;

		return $wpdb->get_col( $sql );
	}

	public function should_run_again( $posts ) {
		return true;
	}

	public function get_current_offset() {
		return 0;
	}

	public function get_limit() {
		return 200;
	}

}
