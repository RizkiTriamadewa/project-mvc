<?php 

    class Room {
        private $db;
        private $table = "ruangan";

        public function __construct($db)
        {
            $this->db = $db;
        }

        public function getAllRoom(){
            $query = "SELECT * FROM {$this->table}";
            $result = $this->db->connection->query($query);
            return $result->fetch_all(MYSQLI_ASSOC);
        }

        public function createRoom($nama_ruangan, $kapasitas_ruangan, $status_ruangan){
            $query = "INSERT INTO {$this->table} (nama_ruangan, kapasitas_ruangan, status_ruangan)
            VALUES (?, ?, ?)";
            $stmt = $this->db->connection->prepare($query);
            $stmt->bind_param('sis', $nama_ruangan, $kapasitas_ruangan, $status_ruangan);
            return $stmt->execute();
        }

        public function getRoomByID($id_ruangan){
            $query = "SELECT * FROM {$this->table} WHERE id_ruangan = ?";
            $stmt = $this->db->connection->prepare($query);
            $stmt->bind_param('i', $id_ruangan);
            $stmt->execute();
            $result = $stmt->get_result();
            return $result->fetch_assoc();
        }

        public function updateRoom($id_ruangan, $nama_ruangan, $kapasitas_ruangan, $status_ruangan){
            $query = "UPDATE {$this->table} SET nama_ruangan = ?, kapasitas_ruangan = ?, status_ruangan = ?
            WHERE id_ruangan = ?";
            $stmt = $this->db->connection->prepare($query);
            $stmt->bind_param('sisi', $nama_ruangan, $kapasitas_ruangan, $status_ruangan, $id_ruangan);
            return $stmt->execute();
        }

        public function deleteRoom($id) {
            $query = "DELETE FROM {$this->table} WHERE id_ruangan = ?";
            $stmt = $this->db->connection->prepare($query);
            $stmt->bind_param('i', $id);
            return $stmt->execute();
        }
    }
?>