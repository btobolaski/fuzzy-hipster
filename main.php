<?php
/*
 * Plugin Name: fuzzy-hipster
 * Plugin URI: https://github.com/btobolaski/fuzzy-hipster
 * Description: A plugin in to do pull quotes in the way that a List Apart has suggested doing them
 * Revision: 0.1
 * Author: Brendan Tobolaski
 * Author URI: http://tobolaski.com
 * License:
 */

// List the shortcodes that this plugin uses
add_shortcode("pullquote", "fh_quote");

// The function that actually makes the output
function fh_quote($atts, $content = null) {
	extract(shortcode_atts(array(
		"author" => "",
		"site" => ""
	), $atts));
	$output_quote = "<figure class='quote'>\n";
	$output_quote = $output_quote . "\t" . $content . "\n";
	if ( $author != "" or $site != "" ) {
		$output_quote = $output_quote . "\t<figcaption>";
		if ( $author != "" ){
			$output_quote = $output_quote . $author;
		}
		if ( $site != "" ){
			$output_quote = $output_quote . " at <cite>" . $site . "</cite>";
		}
		$output_quote = $output_quote . "</figcaption>\n";
	}
	$output_quote = $output_quote . "</figure>\n";
	return $output_quote;
}

?>
