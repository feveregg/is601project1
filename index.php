<?php

   ini_set('display_errors', 'On');
   error_reporting(E_ALL);


   class Manage {	 

    public static function autoload($class) {
	
        include $class . '.php';
	
	}
    
   }

   spl_autoload_register(array('Manage', 'autoload'));



   $obj = new main();

   class main {
   
        public function __construct() {

        	$pagerequest = "uploadForm";

        }

        $page = new $pageRequest;

        if($_SERVER["REQUEST_METHOD"] == "GET") {

        	$page = get();

        } else {

        	$page = post();

        }

   }

   


?>
