<?php
    abstract class page {

        protected $html;
        
        public function __construct() {
        
            $this->html .= htmlTags::htmlStart();
            $this->html .= '<link rel="stylesheet" href="styles.css">';
            $this->html .= htmlTags::htmlBody();
        
        }
        

        public function __destruct() {
        
            $this->html .= htmlTags::bodyEnd();
            $this->html .= htmltags::htmlEnd();
            stringFunctions::printThis($this->html);
        
        }
        

     









    }

?>