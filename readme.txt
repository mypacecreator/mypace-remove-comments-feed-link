=== mypace Remove Comments Feed Link ===
Contributors: mypacecreator
Donate link: http://www.amazon.co.jp/registry/wishlist/33HK9YOKDESUO
Tags: comments, feed, rss
Requires at least: 4.0
Tested up to: 5.4
Stable tag: 1.1.1
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html


== Description ==

This plugin will remove comments feed links from header, output only posts feed. When someone tries to access the comments feed url, your server returns status code 404.


== Installation ==

1. Upload `mypace Remove Comments Feed Link` to the `/wp-content/plugins/` directory
2. Activate the plugin through the 'Plugins' menu in WordPress

== Screenshots ==

1. Before activate this plugin.
2. After activate this plugin.


== Changelog ==

= 1.1.1 =
* localization

= 1.1 =
* Bug fix. Specified the priority in the call to remove_action('wp_head', 'feed_links')

= 1.0 =
* Initial release.

= GitHub =

https://github.com/mypacecreator/mypace-remove-comments-feed-link
