<?php 
    class UserModel{
        public $username;
        public $email;
        public $passcode;

        public static $id_feild = "id";
        public static $username_feild = "username";
        public static $pass_feild = "pass";
        public static $email_feild = "email";
        public static $reg_data_feild = "reg_date";
        
        function __construct($u_name, $u_email, $u_pass){
            $this->username = $u_name;
            $this->email = $u_email;
            $this->passcode = $u_pass;
        }

        public static $create_table = "CREATE TABLE IF NOT EXISTS users(
            id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
            username VARCHAR(30) NOT NULL,
            pass VARCHAR(50) NOT NULL,
            email VARCHAR(50),
            reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
            )";

        public function insert_data(){
          return "INSERT INTO users(username, pass, email) VALUES ('{$this->username}', '{$this->passcode}', '{$this->email}')";
        }

        public static $select_all = "SELECT * FROM users";
      
        public static function select_where($statement) {
            return "SELECT * FROM users WHERE $statement";
        }
       
        function get_username(){
            return $this->username;
        }

        function get_email(){
            return $this->email;
        }
        
        function get_passcode(){
            return $this->passcode;
        }

        function set_username($value){
            $this->username = $value;
        }

        function set_email($value){
            $this->email = $value;
        }

        function set_passcode($value){
            $this->passcode = $value;
        }

        public static function fromJson($json){
            return new UserModel(
                $json[self::$username_feild],
                $json[self::$email_feild],
                $json[self::$pass_feild],
            );
        }

}