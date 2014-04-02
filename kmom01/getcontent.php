<?php 

/** 
 * Create a link to the content, based on its type
 *
 * @param object $content to link to
 * @return string with url to display content
 */
 
function getUrlToContent($content) {
	switch ($content->) {
		case 'page': return "page.php?url={$content->url}"; break;
		case 'post': return "blog.php?slug={$content->slug}"; break;
		default: return null; break;
	}
}

// rensa bort skadlig kod innan lagring i databasen 
$url    = isset($_POST['url'])   ? strip_tags($_POST['url']) : null;
$type   = isset($_POST['type'])  ? strip_tags($_POST['type']) : array();
 
$title  = isset($_POST['title']) ? $_POST['title'] : null;
$data   = isset($_POST['data'])  ? $_POST['data'] : array();

// check if incoming parameters are valid
is_numeric($id) or die('Check id must be numeric');