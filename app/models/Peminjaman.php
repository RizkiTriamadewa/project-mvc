<?php 

    class Rent {
        private $db;
        private $table = "peminjaman";

        public function __construct($db)
        {
            $this->db = $db;
        }

        public function getAllRent(){
            $query = "SELECT * FROM {$this->table}";
            $result = $this->db->connection->query($query);
            return $result->fetch_all(MYSQLI_ASSOC);
        }

        public function createRent($nama_usr, $nama_ruangan, $tanggal_peminjaman){
            $query = "INSERT INTO {$this->table} (nama_usr, nama_ruangan, tanggal_peminjaman)
            VALUES (?, ?, ?)";
            $stmt = $this->db->connection->prepare($query);
            $stmt->bind_param('sss', $nama_usr, $nama_ruangan, $tanggal_peminjaman);
            return $stmt->execute();
        }

        public function getRentByID($id_peminjaman){
            $query = "SELECT * FROM {$this->table} WHERE id_peminjaman = ?";
            $stmt = $this->db->connection->prepare($query);
            $stmt->bind_param('i', $id_peminjaman);
            $stmt->execute();
            $result = $stmt->get_result();
            return $result->fetch_assoc();
        }

        public function updateRent($id_peminjaman, $nama_usr, $nama_ruangan, $tanggal_peminjaman){
            $query = "UPDATE {$this->table} SET nama_usr = ?, nama_ruangan = ?, tanggal_peminjaman = ?
            WHERE id_peminjaman = ?";
            $stmt = $this->db->connection->prepare($query);
            $stmt->bind_param('ssss', $nama_usr, $nama_ruangan, $tanggal_peminjaman, $id_peminjaman);
            return $stmt->execute();
        }

        public function deleteRent($id) {
            $query = "DELETE FROM {$this->table} WHERE id_peminjaman = ?";
            $stmt = $this->db->connection->prepare($query);
            $stmt->bind_param('i', $id);
            return $stmt->execute();
        }
    }
?>