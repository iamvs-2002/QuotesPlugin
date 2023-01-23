<?php
/**
* Plugin Name: quotes-plugin
* Description: A Plugin that displays random quotes on your WP Admin header
* Version: 0.1
* Author: Vaibhav
**/

add_action( 'admin_bar_menu', 'display_random_quote', 999 );

function display_random_quote($wp_admin_bar) {
    $quotes = array(
        "Sample quote 1",
        "Sample quote 2",
        "Sample quote 3",
        "Sample quote 4",
        "Sample quote 5",
        "Sample quote 6"
    );
    $quote = $quotes[ array_rand( $quotes ) ];

    $wp_admin_bar->add_node( array(
        'id' => 'my-custom-quote',
        'title' => $quote,
    ));
    # echo $quote;
}

?>
