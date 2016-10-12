=== Plugin Name ===
Contributors: yuriy.vasilyev
Tags: seo, microdata
Stable tag: 4.6.1
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

The plugin removes JSON+LD Schema from the homepage.

== Description ==

The plugin removes JSON+LD Schema from your homepage that usually looks like this:

<script type='application/ld+json'>
	{
		"@context":"http://schema.org",
		"@type":"WebSite",
		"url":"http://example.com/",
		"name":"My Site",
		"potentialAction": {
			"@type":"SearchAction",
			"target":"http://example.com/?s={search_term_string}",
			"query-input":"required name=search_term_string"
		}
	}
</script>

== Installation ==

1. Upload `remove-yoast-microdata` folder to the `/wp-content/plugins/` directory
2. Activate the plugin through the 'Plugins' menu in WordPress

== Frequently Asked Questions ==


== Screenshots ==


== Changelog ==

= 1.0 =
* Initial release

== Arbitrary section ==


== A brief Markdown Example ==