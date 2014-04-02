<?php 
/** 
 * Standars controller layout
 *
 * @package JorreCore
 */
class CCIndex implements IController {
	
	/**
	 * Implementing interface IController. All Controllers must have an index action
	 */
	public function Index() {
		global $jo;
		$jo->data['title'] 	= "The Index Controller";
		$jo->data['main']	= "<h1> The Index Controller</h1>";
	}
}