<?php

/**
 * Main class for Jorre, holds everything.
 *
 * @packade JorreCore
 */
 
 class CJorre implements ISingleton {
	 
	 private static $instance = null;
	 
	 /**
	  * Singleton pattern, get instance of the latest created object or create a new one 
	  * @return CJorre The instance of this class
	  */
	  public static function Instance() {
		  if(self::$instance == null) {
			  self::$instance = new CJorre();
		  }
		  return self::$instance;
	  }
	  
	  /**
	   * Constructor
	   */
	  protected function __construct() {
		  // include the site specific config.php and create a ref to $jo to be used by config.php
		  $jo = &$this;
		  require(JORRE_SITE_PATH.'/config.php');
	  }
	  
	  
	  /**
	   * Frontcontroller, check url and route to controllers
	   */
	  
	  public function FrontControllerRoute() {
		  // take current url and divide it in controller, method and parameters 
		  $this->request = new CRequest();
		  $this->request->Init($this->config['base_url']);
		  $controller 	= $this->request->controller;
		  $method		= $this->request->method;
		  $arguments	= $this->request->arguments;
		  
		  // is the controller enabled in config.php? 
		  $controllerExists		= isset($this->config['controllers'][$controller]);
		  $controllerEnabled	= false;
		  $className			= false;
		  $classExists			= false;
		  
		  if($controllerExists) {
			  $controllerEnabled	= ($this->config['controllers'][$controller]['enabled'] == true);
			  $className			= $this->config['controllers'][$controller]['class'];
			  $classExists			= class_exists($className);
		  }
		  
		  // check if the controller has a callable method in the controller class, if so- call it
		  if($controllerExists && $controllerEnabled && $classExists) {
			  $rc = new ReflectionClass($className);
			  if($rc->implementsInterface('IController')) {
				  if($rc->hasMethod($method)) {
					  $controllerObj 	= $rc->newInstance();
					  $methodObj		= $rc->getMethod($method);
					  $methodObj->invokeArgs($controllerObj, $arguments);
				  }	
				  else {
					  die("404. " . get_class() . ' error: Controller does not contain method.');
				  }
			  } 
			  else {
				   die('404. ' . get_class() . ' error: Controller does not implement interface IController.');
			  }
		  }
		  else {
			  die('404. Page is not found');
		  }
    	
	  }
	  
	  /** 
	   * Theme engine render, renders the reply of the request 
	   */
	   
	  public function ThemeEngineRender() {
	  	// get the paths and settings for the theme
	  	$themeName	= $this->config['theme']['name'];
	  	$themePath	= JORRE_INSTALL_PATH . "/themes/{$themeName}";
	  	$themeUrl	= $this->request->base_url . "themes/{$themeName}";
	  	
	  	// add stylesheet path the the $ly->data array
	  	$this->data['stylesheet'] = "{$themeUrl}/style.css";
	  	
	  	// include the global functions.php and the functions.php that are part of the theme
	  	$jo = &$this;
	  	include (JORRE_INSTALL_PATH . '/themes/functions.php');
	  	$functionsPath = "{$themePath}/functions.php";
	  	if(is_file($functionsPath)) {
		  	include $functionsPath;
	  	}
	  	
	  	// extract $ly->data to own variables and handover to the template file
	  	extract($this->data);
	  	include("{$themePath}/default.tpl.php");
	  }
}
	  
	  