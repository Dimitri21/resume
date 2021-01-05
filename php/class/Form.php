<?php 

class Form {

        private $datas = [];

        public function __construct($datas = []) {
                $this-> datas = $datas;
        }


        private function input($type, $name, $label) {

                $value = "";
                if(isset($this->datas[$name])) {
                        $value = $this->datas[$name];
                }

                if($type == 'textarea') {
                        $input = "<textarea class = \"materialize-textarea validate\" required name=\"$name\" id=\"$name\" >$value</textarea>
                        <label for=\"$name\">$label</label>";
                } else {
                        $input = "<input class = \"validate\" required type=\"$type\" name=\"$name\" id=\"$name\" value=\"$value\">
                        <label for=\"$name\">$label</label>";
                }

             
                        
                return  "<div class = \"input-field\">
                        $input
                         </div>";

        }

        public function text($name, $label) {

             return $this->input('text', $name, $label);

        }


        public function email($name, $label) {

                return $this->input('email', $name, $label);
   
        }

        
        public function textarea($name, $label) {

                return $this->input('textarea', $name, $label);
   
        }



}