<?php 
require_once __DIR__ . '/../models/Peminjaman.php';
require_once __DIR__ . '/../../config/Database.php';

class RentController {
    private $rentModel;

    public function __construct(){
        $db = new Database();
        $this->rentModel = new Rent($db);
    }

    public function index(){
        $data = $this->rentModel->getAllRent();

        include __DIR__. '/../views/peminjaman/index.php';
    }

    public function create(){
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $nama_usr = $_POST['nama_usr'];
            $nama_ruangan = $_POST['nama_ruangan'];
            $tanggal_peminjaman = $_POST['tanggal_peminjaman'];
            $this->rentModel->createRent($nama_usr, $nama_ruangan, $tanggal_peminjaman);
            header("Location: index.php");
        } else {
            include __DIR__ . '/../views/peminjaman/create.php';
        }
    }

    public function edit($id_ruangan){
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $nama_usr = $_POST['nama_usr'];
            $nama_ruangan = $_POST['nama_ruangan'];
            $tanggal_peminjaman = $_POST['tanggal_peminjaman']; 
            $this->rentModel->updateRent($id_ruangan, $nama_usr, $nama_ruangan, $tanggal_peminjaman);
            header("Location: index.php");
        } else {
            $data = $this->rentModel->getRentByID($id_ruangan);
            include __DIR__ . '/../views/peminjaman/edit.php';
        }
    }

    public function delete($id_ruangan){
        $this->rentModel->deleteRent($id_ruangan);
        header("Location: index.php");
    }
}
?>
