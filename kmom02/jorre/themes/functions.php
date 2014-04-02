<?php 
/**
 * Helpers for theming, avaible for all themes in their template files and functions.php 
 * This file is included right before the themes own functions.php 
 */ 
 
/** 
 * Create a url by prepending the base_url
 */
function base_url($url) {
	return CJorre::Instance()->request->base_url . trim($url, '/');
}

/**
 * Return the current url
 */
function current_url() {
	return CJorre::Instance()->request->current_url;
}