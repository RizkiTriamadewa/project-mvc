<?php 
    class Admin {
        private $db;
        private $table = "admin";

        public function __construct($db)
        {
            $this->db = $db;
        }

        public function getAllAdmin(){
            $query = "SELECT * FROM {$this->table}";
            $result = $this->db->connection->query($query);
            return $result->fetch_all(MYSQLI_ASSOC);
        }

        public function createAdmin($nama_adm, $username_adm, $password_adm){
            $query = "INSERT INTO {$this->table} (nama_adm, username_adm, password_adm)
            VALUES (?, ?, ?)";
            $stmt = $this->db->connection->prepare($query);
            $stmt->bind_param('sss', $nama_adm, $username_adm, $password_adm);
            return $stmt->execute();
        }

        public function getAdminByID($id_adm){
            $query = "SELECT * FROM {$this->table} WHERE id_adm = ?";
            $stmt = $this->db->connection->prepare($query);
            $stmt->bind_param('i', $id_adm);
            $stmt->execute();
            $result = $stmt->get_result();
            return $result->fetch_assoc();
        }

        public function updateAdmin($id_adm, $nama_adm, $username_adm, $password_adm){
            $query = "UPDATE {$this->table} SET nama_adm = ?, username_adm = ?, password_adm = ?
            WHERE id_adm = ?";
            $stmt = $this->db->connection->prepare($query);
            $stmt->bind_param('sssi', $nama_adm, $username_adm, $password_adm, $id_adm);
            return $stmt->execute();
        }

        public function deleteAdmin($id_adm) {
            $query = "DELETE FROM {$this->table} WHERE id_adm = ?";
            $stmt = $this->db->connection->prepare($query);
            $stmt->bind_param('i', $id_adm);
            return $stmt->execute();
        }
    }
?>