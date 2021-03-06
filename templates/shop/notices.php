<?php
/**
 * Show messages
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     2.1
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

if ( ! $notices ) return;
?>

<?php foreach ( $notices as $notice ) : ?>
	<div class="woocommerce-info"><?php echo wp_kses_post( $notice ); ?></div>
<?php endforeach; ?>
