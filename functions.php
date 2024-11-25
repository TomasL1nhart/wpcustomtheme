<?php
// Funkce pro načtení stylů
function csablona_enqueue_styles() {
    wp_enqueue_style('csablona-style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'csablona_enqueue_styles');
