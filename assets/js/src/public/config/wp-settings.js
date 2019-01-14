
const wp = window.bigcommerce_config || {};

export const IMAGES_URL = wp.images_url || {};
export const TEMPLATE_URL = wp.template_url || {};
export const CART_API_BASE = wp.cart.api_url || '';
export const AJAX_CART_ENABLED = wp.cart.ajax_enabled || '';
export const AJAX_CART_NONCE = wp.cart.ajax_cart_nonce || '';
export const COUNTRIES_OBJ = wp.countries || {};
export const PRODUCT_MESSAGES = wp.product.messages || '';
