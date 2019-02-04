<?php


namespace BigCommerce\Settings;


use BigCommerce\Import\Runner\Cron_Runner;
use BigCommerce\Import\Runner\Status;
use BigCommerce\Import\Task_Manager;

/**
 * Class Import_Status
 *
 * Displays the import status on the settings page after the import button
 */
class Import_Status {

	const AJAX_ACTION_IMPORT_STATUS = 'bigcommerce_import_status';
	const IMPORT_TOTAL_PRODUCTS     = 'bigcommerce_import_total_products';

	/**
	 * @var Task_Manager
	 */
	private $manager;

	public function __construct( Task_Manager $manager ) {
		$this->manager = $manager;
	}

	/**
	 * @return void
	 * @action bigcommerce/settings/render/frequency
	 */
	public function render_status() {
		$this->current_status_notice();

		$previous = $this->previous_status();
		$next     = $this->next_status();

		if ( $previous[ 'message' ] ) {
			$icon            = $previous[ 'status' ] === Status::FAILED ? '<i class="dashicons dashicons-warning"></i>' : '';
			$previous_output = sprintf( '<div class="import-status import-status-previous">%s <p class="bc-import-status-message">%s</p></div>', $icon, $previous[ 'message' ] );
			if ( $previous[ 'status' ] === Status::FAILED ) {
				$previous_output = sprintf( '<div class="notice bigcommerce-notice bigcommerce-notice__import-status bigcommerce-notice__import-status--error">%s</div>', $previous_output );
			}
			echo $previous_output;
		}
		if ( $next[ 'message' ] ) {
			printf( '<span class="import-status import-status-next">%s</span>', $next[ 'message' ] );
		}

	}

	/**
	 * Render a notice for the status of a currently running import
	 *
	 * @return void
	 * @action bigcommerce/settings/import/product_list_table_notice
	 */
	public function current_status_notice() {
		$current = $this->current_status();
		if ( $current[ 'message' ] ) {
			printf( '<div class="notice notice-info bigcommerce-notice bigcommerce-notice__import-status" data-js="bc-import-progress-status"><div class="import-status import-status-current"><i class="bc-icon icon-bc-sync"></i> <p class="bc-import-status-message">%s</p></div></div>', $current[ 'message' ] );
		}
	}

	/**
	 * Returns current status and pushes next cron task to run
	 *
	 * returns wp_send_json response
	 */
	public function ajax_current_status() {
		if ( ! current_user_can( 'manage_options' ) ) {
			wp_send_json_error( [ 'code' => 'unauthorized' ], 403 );
		}
		$nonce = filter_input( INPUT_GET, '_wpnonce' );
		if ( empty( $nonce ) || ! wp_verify_nonce( $nonce, self::AJAX_ACTION_IMPORT_STATUS ) ) {
			wp_send_json_error( [ 'code' => 'invalid_nonce' ], 403 );
		}
		// return current status
		wp_send_json_success( $this->current_status() );

		// Just in case
		wp_die( '', '', [ 'response' => null ] );
	}

	/**
	 * @return array The message describing the current import and the status string
	 */
	private function current_status() {
		$status   = new Status();
		$current  = $status->current_status();
		$previous = $status->previous_status();

		$total_steps     = $this->manager->task_count() - 1; // minus one to ignore the "start" step"
		$completed_steps = $this->manager->completed_count( $current[ 'status' ] );
		$current_task    = $this->manager->get_task( $current[ 'status' ] );

		$total     = (int) get_option( self::IMPORT_TOTAL_PRODUCTS, 0 );
		$remaining = $this->get_remaining_in_queue();
		$total     = max( $remaining, $total ); // just in case the option isn't set.
		$completed = $total - $remaining;

		$response  = [];

		if ( $current[ 'status' ] === Status::NOT_STARTED ) {
			return [
				'message'  => '',
				'status'   => $current[ 'status' ],
				'previous' => $previous[ 'status' ],
				'products' => [
					'total'     => (int) $total,
					'completed' => (int) $completed,
					'status'    => ( $previous[ 'status' ] === Status::FAILED ) ? '' : sprintf( _n( '%s Product Successfully Synced', '%s Products Successfully Synced', $total, 'bigcommerce' ), $total ),
				],
			];
		}

		switch ( $current[ 'status' ] ) {
			case Status::PROCESSING_QUEUE:
				$status_string = sprintf( __( 'Importing products: %d of %d', 'bigcommerce' ), $completed, $total );
				break;
			default:
				$status_string = $current_task->get_description();
				break;
		}

		if ( empty( $status_string ) ) {
			$status_string = __( 'Import in progress.', 'bigcommerce' );
		} else {
			$status_string = sprintf( __( 'Step %s of %s: %s', 'bigcommerce' ), $completed_steps, $total_steps, $status_string );
		}
		$response = array_merge( [
			'message'  => apply_filters( 'bigcommerce/settings/import_status/current', $status_string, $current[ 'status' ], $current[ 'timestamp' ] ),
			'status'   => $current[ 'status' ],
			'previous' => $previous[ 'status' ],
			'products' => [
				'total'     => (int) $total,
				'completed' => (int) $completed,
				'status'    => sprintf( __( '%s of %s', 'bigcommerce' ), $completed, $total ),
			],
		], $response );

		return $response;
	}

	/**
	 * @return array The message describing the previous import and the status string
	 */
	private function previous_status() {
		$status    = new Status();
		$previous  = $status->previous_status();
		$timestamp = strtotime( get_date_from_gmt( date( 'Y-m-d H:i:s', (int) $previous[ 'timestamp' ] ) ) );
		$date      = date_i18n( get_option( 'date_format', 'Y-m-d' ), $timestamp, false );
		$time      = date_i18n( get_option( 'time_format', 'H:i' ), $timestamp, false );
		switch ( $previous[ 'status' ] ) {
			case Status::COMPLETED:
				$status_string = sprintf( __( 'Last import completed on <strong>%s at %s</strong>.', 'bigcommerce' ), $date, $time );
				break;
			case Status::FAILED:
				$status_string = sprintf( __( 'Last import failed on <strong>%s at %s</strong>.', 'bigcommerce' ), $date, $time );
				break;
			case Status::NOT_STARTED:
				$status_string = '';
				break;
			default:
				$status_string = __( 'Last import did not finish.', 'bigcommerce' );
				break;
		}

		return [
			'message' => apply_filters( 'bigcommerce/settings/import_status/previous', $status_string, $previous[ 'status' ], $previous[ 'timestamp' ] ),
			'status'  => $previous[ 'status' ],
		];

	}

	/**
	 * @return array The message describing the next import and the status string
	 */
	private function next_status() {
		$next = wp_next_scheduled( Cron_Runner::START_CRON );
		if ( $next ) {
			$timestamp     = strtotime( get_date_from_gmt( date( 'Y-m-d H:i:s', (int) $next ) ) );
			$date          = date_i18n( get_option( 'date_format', 'Y-m-d' ), $timestamp, false );
			$time          = date_i18n( get_option( 'time_format', 'H:i' ), $timestamp, false );
			$status_string = sprintf( __( 'Your next import is scheduled to start on <strong>%s at %s</strong>.', 'bigcommerce' ), $date, $time );
		} else {
			$status_string = ''; // an import is probably in progress
		}

		return [
			'message' => apply_filters( 'bigcommerce/settings/import_status/previous', $status_string, $next ),
			'status'  => $next,
		];

	}

	/**
	 * Cache the current size of the import queue.
	 * This allows us to show progress as the queue
	 * diminishes.
	 *
	 * @return void
	 */
	public function cache_queue_size() {
		$count = $this->get_remaining_in_queue();
		update_option( self::IMPORT_TOTAL_PRODUCTS, (int) $count );
	}

	/**
	 * @return int The number of records remaining in the import queue
	 */
	private function get_remaining_in_queue() {
		/** @var \wpdb $wpdb */
		global $wpdb;
		$count = $wpdb->get_var( "SELECT COUNT(*) FROM {$wpdb->bc_import_queue}" );

		return (int) $count;
	}
}
