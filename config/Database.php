<?php

    class Database {
        private $host = "localhost";
        private $user = "root";
        private $password = "";
        private $dbname =  "db_peminjaman";
        public $connection;
        
        public function __construct() 
        {
            $this->connect_db();
        }

        public function connect_db() {
            $this->connection = new mysqli($this->host, $this->user, 
            $this->password, $this->dbname);

        if ($this->connection->connect_error) {
            die("Koneksi gagal: " . $this->connection->connect_error);
            }
        }
    }
?>