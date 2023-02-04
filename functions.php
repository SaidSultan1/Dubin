<?php
add_action('wp_enqueue_scripts' , 'db_structure');

function db_structure() {
    wp_enqueue_style('main-styles', get_template_directory_uri() . '/style.css');
} 