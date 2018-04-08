<?php 

    class Account {

        private $errorArray;

        public function __construct() {
            $this->errorArray = array();
        }

        public function register($un,$fn,$ln,$em,$emc,$pw,$pwc) {
            $this->validateRegisterUserName($un);
            $this->validateRegisterFirstName($fn);
            $this->validateRegisterLastName($ln);
            $this->validateRegisterEmail($em,$emc);
            $this->validateRegisterPassword($pw,$pwc);
        }

        private function validateRegisterUserName($un) {
            if(strlen($un) > 25 || strlen($un) < 5) {
                array_push($this->errorArray,"The user name must be between 5 and 25 characters!");
                return;
            }

            // TODO...Check if user name exists in db
        }
                
        private function validateRegisterFirstName($fn) {}
            
        private function validateRegisterLastName($ln) {}
            
        private function validateRegisterEmail($em, $emc) {}
            
        private function validateRegisterPassword($pw, $pwc) {}

    }

?>