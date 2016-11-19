<?php

// Defining Smarty classes loaction
define('SMARTY_DIR', 'c:/wamp64/www/denik/libs/');

// load Smarty library
require(SMARTY_DIR . 'Smarty.class.php');

// Define singleton class for creating Smarty template object
// This will include all the needed paths in each object
// Singleton class will assure that there is only one object created
// If you create more objects from this class they will all point
// to one instance of Smarty.

class SmartySingleton extends Smarty {
	
	static private $instance;
	
	public function __construct() {}
	
	private function __clone() {}
	
	private function __wakeup() {}
	
	static public function instance(){
		
		if( !isset( self::$instance ) ) {
			$smarty = new Smarty;
			
			$smarty->setTemplateDir('c:/wamp64/www/denik/templates/');
			$smarty->setCompileDir('c:/wamp64/www/denik/templates_c');
			$smarty->setConfigDir('c:/wamp64/www/denik/configs/');
			$smarty->setCacheDir('c:/wamp64/www/denik/cache/');
		
			$smarty->caching = Smarty::CACHING_LIFETIME_CURRENT;
			$smarty->debugging = false;
			$smarty->assign('app_name', 'Denik');
			
			self::$instance = $smarty;
		};
		return self::$instance;
	}
}
?>