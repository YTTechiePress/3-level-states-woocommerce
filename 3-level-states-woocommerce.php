<?php
/**
 * Plugin Name: 3 Level States for Woocommerce
 * Plugin URI: https://omukiguy.com
 * Author: Techiepress
 * Author URI: https://omukiguy.com
 * Description: Add shipping zones 3 levels deep for woocommerce.
 * Version: 0.1.0
 * License: GPL2
 * License URL: http://www.gnu.org/licenses/gpl-2.0.txt
 * text-domain: 2lsw
*/

// add basic plugin security.
defined( 'ABSPATH' ) or die;

add_filter( 'woocommerce_states', 'techiepress_3ld_states' );

function techiepress_3ld_states( $states ) {

    $map = array();

    $cities = array(
        'UG19999' => array(
            'city'     => 'Kampala',
            'division' => 'Nakawa',
        ),
        'UG29999' => array(
            'city'     => 'Kampala',
            'division' => 'Makindye'
        ),
    );

    foreach ( $cities as $city => $cityValue ) {
        $map[$city] = $cityValue['city'] . ', '. $cityValue['division'];
    }
    
    $states['UG'] = $map;
    
    return $states;
}