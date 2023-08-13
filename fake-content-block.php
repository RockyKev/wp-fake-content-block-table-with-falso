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

