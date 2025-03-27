<?php 
require_once __DIR__ . '/../models/Room.php';
require_once __DIR__ . '/../../config/Database.php';

class RoomController {
    private $roomModel;

    public function __construct(){
        $db = new Database();
        $this->roomModel = new Room($db);
    }

    public function index(){
        $data = $this->roomModel->getAllRoom();

        include __DIR__. '/../views/room/index.php';
    }

    public function create(){
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $nama_ruangan = $_POST['nama_ruangan'];
            $kapasitas_ruangan = $_POST['kapasitas_ruangan'];
            $status_ruangan = $_POST['status_ruangan'];
            $this->roomModel->createRoom($nama_ruangan, $kapasitas_ruangan, $status_ruangan);
            header("Location: index.php");
        } else {
            include __DIR__ . '/../views/room/create.php';
        }
    }

    public function edit($id_ruangan){
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $nama_ruangan = $_POST['nama_ruangan'];
            $kapasitas_ruangan = $_POST['kapasitas_ruangan'];
            $status_ruangan = $_POST['status_ruangan']; 
            $this->roomModel->updateRoom($id_ruangan, $nama_ruangan, $kapasitas_ruangan, $status_ruangan);
            header("Location: index.php");
        } else {
            $data = $this->roomModel->getRoomByID($id_ruangan);
            include __DIR__ . '/../views/room/edit.php';
        }
    }

    public function delete($id_ruangan){
        $this->roomModel->deleteRoom($id_ruangan);
        header("Location: index.php");
    }
}
?>
