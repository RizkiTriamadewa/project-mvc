<?php 
    class User {
        private $db;
        private $table = "user";

        public function __construct($db)
        {
            $this->db = $db;
        }

        public function getAllUser(){
            $query = "SELECT * FROM {$this->table}";
            $result = $this->db->connection->query($query);
            return $result->fetch_all(MYSQLI_ASSOC);
        }

        public function createUser($nama_usr, $username_usr, $password_usr){
            $query = "INSERT INTO {$this->table} (nama_usr, username_usr, password_usr)
            VALUES (?, ?, ?)";
            $stmt = $this->db->connection->prepare($query);
            $stmt->bind_param('sss', $nama_usr, $username_usr, $password_usr);
            return $stmt->execute();
        }

        public function getUserByID($id_usr){
            $query = "SELECT * FROM {$this->table} WHERE id_usr = ?";
            $stmt = $this->db->connection->prepare($query);
            $stmt->bind_param('i', $id_usr);
            $stmt->execute();
            $result = $stmt->get_result();
            return $result->fetch_assoc();
        }

        public function updateUser($id_usr, $nama_usr, $username_usr, $password_usr){
            $query = "UPDATE {$this->table} SET nama_usr = ?, username_usr = ?, password_usr = ?
            WHERE id_usr = ?";
            $stmt = $this->db->connection->prepare($query);
            $stmt->bind_param('sssi', $nama_usr, $username_usr, $password_usr, $id_usr);
            return $stmt->execute();
        }

        public function deleteUser($id_usr) {
            $query = "DELETE FROM {$this->table} WHERE id_usr = ?";
            $stmt = $this->db->connection->prepare($query);
            $stmt->bind_param('i', $id_usr);
            return $stmt->execute();
        }
    }
?>