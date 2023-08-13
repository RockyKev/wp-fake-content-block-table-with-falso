<?php 

// https://developer.wordpress.org/block-editor/reference-guides/block-api/block-metadata/#wpdefinedasset
// TODO: have the version generate based on the timestamp of the script.js file

return array(
    'handle' => 'fake-content-block-js-asset',
    'dependencies' => array(
        'wp-blocks',
        'wp-element',
        'wp-i18n',
    ),
    'version'      => uniqid(),
);