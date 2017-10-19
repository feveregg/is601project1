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

?>