<?php

    class table extends page {

    	public function get() {

    		
            
            chdir('uploads');                                     
            
            $file = fopen($_GET['filename'], "r");
            
            htmlTags::tableStart();               
            
                 $row = 1;
            
            while (($data=fgetcsv($file)) !== FALSE){    
            
                foreach($data as $value) {
            
                    if ($row == 1) {
            
                        htmlTags::tableHeader($value);
            
                    }else {
             
                        htmlTags::tableContent($value);
             
                    }
             
                }
             
                $row++;
                htmlTags::breakTableRow();
           
            }

            fclose($file);
    	}
    






    }
?>