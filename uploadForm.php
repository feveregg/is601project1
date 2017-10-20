<?php

   class uploadForm extends page {

    	public function get() {

    		$form = '<form action="index.php?page=uploadForm" method="POST" enctype="multipart/form-data">';
            $form .= '<input type="file" name="fileToUpload" id="fileToUpload">';
            $form .= '<input type="submit" value="Upload" name="submit">';
            $form .= '</form>';
            $this->html .= htmlTags::headingOne("Upload CSV file");
            $this->html .= $form;
    	
    	}

        

        public function post() {                         
        
            $target_dir = "uploads/";			
            $target_file = $target_dir . $_FILES["fileToUpload"]["name"];
 

            if (file_exists($target_file)) {
             
                $this->html .= htmlTags::changeLine("Already exist");

            }


            if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
             
                header("Location: index.php?page=table&filename=" . $_FILES["fileToUpload"]["name"]);
            
            }

        }
    }
?>