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

        
        static function tableStart() {

           echo "<table cellpadding='1px' border='1px solid black' style='border-collapse: collapse'>";
           	
        }


        static function tableHeader($input) {
        
            echo '<th style="font-size: small">'.$input.'</th>';
        
        }
        

        static public function tableContent($input) {
        
            echo '<td>'.$input.'</td>';
        
        }
        

        static public function breakTableRow() {
        
            echo '</tr>';
        
        }

      }




?>