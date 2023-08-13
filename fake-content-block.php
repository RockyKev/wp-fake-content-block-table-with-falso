<?php

/**
 * @package Fake Content Block
 * @version 1.0
 */
/*
Plugin Name: Fake Content Block
Description: This is a block that generates a table of fake content
Author: Rocky Kev
Version: 1.0
*/


function acf_blocks_json_register_blocks() {
    register_block_type(dirname(__FILE__) . '/src/block.json');
}

add_action('init', 'acf_blocks_json_register_blocks');


// TODO: Figure out how to add it to block.json but also load in the footer
// enqueue it into the footer


function custom_enqueue() {
    wp_register_script('fake-content-block-script', plugin_dir_url( __FILE__ ) . 'fake-content-block/script.js', [], false, true);
    wp_enqueue_script('fake-content-block-script');
}
add_action('wp_enqueue_scripts', 'custom_enqueue');
