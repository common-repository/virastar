<?php
/*
Plugin Name: WP Virastar
Plugin URI: http://wp.irtuts.com
Description: Virastar  is a persian character standardization, Pinglish transliteration, punctuation correction.
Version: 0.1
Author: aliaghdam
Author URI: http://aliaghdam.com
License: GPL2
*/


/*  Register and add rlm button for tinyMCE */
include_once('rlm.php');

// Punctuation Pattern and functions
include_once('punctuation.php');
	
// Corecting Numbers of other languages
include_once('nums.php');

	// Standardize Title text for Farsi
	add_filter("the_title", "wpvirastar_title");
	function wpvirastar_title($content) {
		
		// space corection
		$content = wpvirastar_spaces($content);
		
		// comma corection
		$content = wpvirastar_comma($content);
		
		// Numbers corection
		$content = wpvirastar_fix_nums($content);
		
		return $content; 
	}

	// standadize content text for Farsi
	add_filter("the_content", "wpvirastar_content");
	function wpvirastar_content($content, $editor = false) {
		
		// space corection
		$content = wpvirastar_spaces($content);
		
		// comma corection
		$content = wpvirastar_comma($content);
		
		// Numbers corection
		$content = wpvirastar_fix_nums($content);
		
		return $content;	
	}

	
	// Standardize Tags text or Farsi
	add_filter("the_tags", "wpvirastar_tag");
	function wpvirastar_tag($content) {
	
		// space corection
		$content = wpvirastar_spaces($content);
		
		// comma corection
		$content = wpvirastar_comma($content);
		
		// Numbers corection
		$content = wpvirastar_fix_nums($content);
		
		return $content;
	}
	
	// Standardize Comment text for Farsi
	add_filter("comment_text", "wpvirastar_comment");
	function wpvirastar_comment($content) {
		
		// space corection
		$content = wpvirastar_spaces($content);
		
		// comma corection
		$content = wpvirastar_comma($content);
		
		// Numbers corection
		$content = wpvirastar_fix_nums($content);
		
		return $content;
	}