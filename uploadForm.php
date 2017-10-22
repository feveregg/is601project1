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
            $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
            $uploadOk = 1;
 
            
            //check if file has already existed
            if (file_exists($target_file)) {
             
                $this->html .= htmlTags::changeLine("Already exist");
                $uploadOk = 0;

            }

            
            //Check if user slect the file
            if (is_uploaded_file($_FILES["fileToUpload"]["tmp_name"]) == FALSE) {

                echo "You didn't choose the file!";
                $uploadOk = 0;

            }


            //Check file sizxe
            if ($_FILES["fileToUpload"]["size"] > 500000) {

                echo "Sorry, your file is too large.";
                $uploadOk = 0;
            
            }
        
            
            //Check and upload
            if ($uploadOk == 0) {

                $this->html .= htmlTags::changeLine('File uploaded fail. Beacuse you may upload the same name file of the file is too big.');
                    
            } else {

                if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
             
                header("Location: index.php?page=table&filename=" . $_FILES["fileToUpload"]["name"]);

            }

            }

        }    
               
    }
?>