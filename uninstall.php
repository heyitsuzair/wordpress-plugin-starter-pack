<?php
// trigger this file on uninstall

if (!defined('WP_UNINSTALL_PLUGIN')) {
    die;
}
// clear database stored data
// $books = get_posts(array('post_type' => 'book_slug', 'numberposts' => -1));

// foreach ($books as $book) {
//     wp_delete_post($book->ID, true);
// }

// access the database via SQL
// global $wpdb;
// $wpdb->query('DELETE FROM wp_posts WHERE post_type="book_slug"');
// $wpdb->query('DELETE FROM wp_postmeta WHERE post_id NOT IN (SELECT ID from wp_posts)');
// $wpdb->query('DELETE FROM wp_term_relationships WHERE object_id NOT IN (SELECT ID from wp_posts)');