<?php
/**
 * Plugin Name: Indian Currency (Rupee) Symbol for Woocommerce
 * Plugin URI: https://bhavinsuvaliya.wordpress.com/
 * Description: Woocommerce Indian Currency (INR) Symbol display rupee symbol on INR currency using font awesome
 * Version: 1.0.1
 * Author: Bhavin Suvaliya
 * Author URI: https://bhavinsuvaliya.wordpress.com/
 * Text Domain: woocommerce-inr-symbol
 * Domain Path: /languages/
 *
 * @author Bhavin Suvaliya
 * @package Indian Currency (Rupee) Symbol for Woocommerce
 * @version 1.0.0
 */

if ( !defined( 'ABSPATH' ) ) { exit; } // Exit if accessed directly




global $woocommerce;
if ( isset( $woocommerce ) || ! function_exists( 'WC' ) ) {

    /**
     *  Load fontawesome on frontend
     */
    function wics_add_scripts(){
       wp_enqueue_style('font-awesome','https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css');
    }
    add_action('wp_head', 'wics_add_scripts');


    function wics_add_admin_scripts(){
        wp_enqueue_style('font-awesome','https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css');
    }
    add_action('admin_enqueue_scripts', 'wics_add_admin_scripts');
    /**
     * @param $currency_array
     * @return mixed
     */
    function addINR($currency_array){
        $currency_array['INR'] = '<i class="fa fa-rupee"></i> ';
        return $currency_array;
    }
    add_filter('woocommerce_currency_symbols','addINR');
}
