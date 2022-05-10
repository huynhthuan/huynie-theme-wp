<?php

/**
 * Inser Code To Header Footer
 */
function insert_code_to_header()
{
    // global $sh_option;
    // $html_header = $sh_option['opt-textarea-header'];
    // if ($html_header) {
    //     echo $html_header;
    // }
}
add_action('wp_head', 'insert_code_to_header');

function insert_code_to_footer()
{
    // global $sh_option;
    // $html_footer = $sh_option['opt-textarea-footer'];
    // if ($html_footer) {
    //     echo $html_footer;
    // }
}
add_action('wp_footer', 'insert_code_to_footer');
