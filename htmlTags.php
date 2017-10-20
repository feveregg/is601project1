<?php

      class htmlTags {

        static function headingOne($input) {

           return "<h1>$input</h1>";

        }

      
        static function changeLine() {

           return "</br>";

        }


        static function htmlStart() {

        	return "<html>";

        }


        static function htmlBody() {

        	return "<body>";

        }


        static function htmlEnd() {

        	return "</html>";

        }


        static function bodyEnd() {

        	return "</body>";
        	
        } 



      }




?>