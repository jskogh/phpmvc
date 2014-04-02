<?php

// bootstrap
define('JORRE_INSTALL_PATH', dirname(__FILE__));
define('JORRE_SITE_PATH', JORRE_INSTALL_PATH . '/site');

require(JORRE_INSTALL_PATH.'/src/CJorre/bootstrap.php');

$jo = CJorre::Instance();

// Frontcontroller route
$jo->FrontControllerRoute();

// Theme engine render
$jo->ThemeEngineRender();
