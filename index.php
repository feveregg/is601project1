<?php

   //debug message
   ini_set('display_errors', 'On');
   error_reporting(E_ALL);

   //auto load classes
   class Manage {	 

    public static function autoload($class) {
	
        include $class . '.php';
	
	}
    
   }

   spl_autoload_register(array('Manage', 'autoload'));


   //start class main
   $obj = new main();



?>
