<?php
/*
Plugin Name: mypace Remove Comments Feed Link
Plugin URI: https://github.com/mypacecreator/mypace-remove-comments-feed-link
Description: This plugin will remove comments feed link from header, output only posts feed.
Author: Kei Nomura (mypacecreator)
Version: 1.0
Author URI: http://mypacecreator.net/
*/

if( !function_exists( 'mypace_comments_feed_404' ) ){
	function mypace_comments_feed_404( $object ) {
		if ( $object->is_comment_feed ) {
			wp_die( 'Page not found.', '', array(
				'response'  => 404,
				'back_link' => true,
			));
		}
	}
	add_action( 'parse_query', 'mypace_comments_feed_404' );
}

if ( !function_exists( 'mypace_output_posts_feed' ) ){
	remove_action('wp_head', 'feed_links', 2, 0);
	remove_action('wp_head', 'feed_links_extra' ,3, 0);
	function mypace_output_posts_feed( ) {
?>
<link rel="alternate" type="<?php echo feed_content_type( 'rss2' ); ?>" title="<?php bloginfo( 'name' ); ?> &raquo; RSS 2.0 Feed" href="<?php bloginfo( 'rss2_url' ); ?>" />
<?php }
	add_filter( 'wp_head','mypace_output_posts_feed' );
}



