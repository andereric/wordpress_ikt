<?php
/**
 * Plugin Name: Very First Plugin
 * Plugin URI: https://www.yourwebsiteurl.com/
 * Description: Muudab "Read More" teksti
 * Version: 1.0
 * Author: Ander-Eric Einmann
 * Author URI: einmannandereric.ikt.khk.ee/wordpress
 **/

function dh_modify_read_more_link() {
    return '<a class="more-link" href="' . get_permalink() . '">Click to Read!</a>';
}
add_filter( 'the_content_more_link', 'dh_modify_read_more_link' );