<?php
    class Database{
        public $DATABASE_HOST;
        public $DATABASE_USERNAME;
        public $DATABASE_PASSWORD;
        public $DATABASE_NAME;

        public $conn;

        function __construct($db_name){
            $this->DATABASE_HOST = "localhost";
            $this->DATABASE_USERNAME = "root";
            $this->DATABASE_PASSWORD = "";
            $this->DATABASE_NAME = $db_name;

            $this->connect_sql();
            $this->create_db();
            $this->connect_database();
        }
        
        function connect_sql(){
            $this->conn = new mysqli($this->DATABASE_HOST, $this->DATABASE_USERNAME, $this->DATABASE_PASSWORD);
            if ($this->conn->connect_error) {
                die("Connection failed: " . $this->conn->connect_error);
            }
        }

        function create_db(){
            $sql = "CREATE DATABASE IF NOT EXISTS $this->DATABASE_NAME";
            if ($this->conn->query($sql) === FALSE) {                
                echo "Error creating database: " . $conn->error;
            }
        }

        function connect_database(){
            $this->conn = new mysqli($this->DATABASE_HOST, $this->DATABASE_USERNAME, $this->DATABASE_PASSWORD, $this->DATABASE_NAME);
            if ($this->conn->connect_error) {
                die("Connection failed: " . $this->conn->connect_error);
            }
        }

        function create_table($sql){
            if ($this->conn->query($sql) === FALSE) {
                echo "Error creating table: " . $this->conn->error;
            }
        }
       
    }

    class UserHandler{
        public $conn;
        function __construct($db){
            $this->conn = $db->conn;
        }

        function insert_data($sql){
            if ($this->conn->query($sql) === FALSE) {
                echo "Error: " . $sql . "<br>" . $thsi->conn->error;
            }
        }

        function select_data($sql){
            $result = $this->conn->query($sql);
            $data = array();
            if($result){
                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                        array_push($data, UserModel::fromJson($row));
                    }
                } 
            }
            return $data;
        }
    }

?>