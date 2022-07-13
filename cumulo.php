<?php

/**
 * Plugin Name:  Shoot Steel
 * Description:  Custom functionality for your theme
 * Version:      1.0
 * Author:       Cumulo Network
 * Author URI:   https://cumulo.network
 * License:      GPLv2 or later
 */

add_action( 'woocommerce_thankyou', 'cumulo_order_data' );
function cumulo_order_data( $order_id ) 
{	
    global $woocommerce;
    $order = new WC_Order($order_id);  
    echo "<!-- Event snippet for Purchase New Site conversion page --> <script>console.log('order complete'); gtag('event', 'conversion', { 'send_to': 'AW-1018212548/csY-CJiV7bEBEMThwuUD', 'value': ".$order->get_total().", 'currency': 'USD', 'transaction_id': '".$order->get_id()."' }); </script>";
}