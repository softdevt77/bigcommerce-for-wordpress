<?php
/**
 * Product_Create_Webhook class
 *
 * @package BigCommmerce
 */

namespace BigCommerce\Webhooks\Product;

use BigCommerce\Logging\Error_Log;
use BigCommerce\Webhooks\Webhook;

/**
 * Class Product_Create_Webhook
 *
 * Sets up the webhook that runs on product creation.
 */
class Product_Create_Webhook extends Webhook {
	const SCOPE  = 'store/product/created';
	const NAME   = 'product_create';

    /**
     * Fires when a product has been created in the BigCommerce store.
     *
     * @param array $request
     */
	public function trigger_action( $request ){
		/**
		 * Fires when a product has been created in the BigCommerce store.
		 *
		 * @param int $product_id BigCommerce product ID.
		 */
		do_action( 'bigcommerce/log', Error_Log::INFO, __( 'Trigger product creation', 'bigcommerce' ), [
			'bc_id' => $request['data']['id'],
		], 'webhooks' );
		do_action( 'bigcommerce/webhooks/product_created', intval( $request['data']['id'] ) );
	}
}
