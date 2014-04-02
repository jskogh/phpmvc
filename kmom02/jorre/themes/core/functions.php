<?php
/**
 * Helpers for the template file.
 */
$jo->data['header'] = '<h1>Header: J0rr3 </h1>';
 // $jo->data['main']	= '<p>Main: Now with a theme engine</p>';
$jo->data['footer']		= '<p>Footer: - Johanna Skogh &copy j0rr3 - </p>';

/**
 * Print debug information from the framework
 */
function get_debug() {
	$jo = CJorre::Instance();
	$html = "<h2>Debuginformation</h2><hr><p>The content of the config array:</p><pre>" . htmlentities(print_r($jo->config, true)) . "</pre>";
	$html .= "<hr><p>The content of the data array:</p><pre>" . htmlentities(print_r($jo->data, true)) . "</pre>";
	$html .= "<hr><p> The content of the request array:</p><pre>" . htmlentities(print_r($jo->request, true)) . "</pre>";
	return $html;
} 

