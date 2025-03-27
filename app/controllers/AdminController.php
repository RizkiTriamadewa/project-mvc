<?php 
require_once __DIR__ . '/../models/Admin.php';
require_once __DIR__ . '/../../config/Database.php';

class AdminController {
    private $adminModel;

    public function __construct(){
        $db = new Database();
        $this->adminModel = new Admin($db);
    }

    public function index(){
        $data = $this->adminModel->getAllAdmin();

        include __DIR__. '/../views/admin/index.php';
    }

    public function create(){
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $nama_adm = $_POST['nama_adm'];
            $username_adm = $_POST['username_adm'];
            $password_adm = $_POST['password_adm'];
            $this->adminModel->createAdmin($nama_adm, $username_adm, $password_adm);
            header("Location: index.php");
        } else {
            include __DIR__ . '/../views/admin/create.php';
        }
    }

    public function edit($id_adm){
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $nama_adm = $_POST['nama_adm'];
            $username_adm = $_POST['username_adm'];
            $password_adm = $_POST['password_adm']; 
            $this->adminModel->updateAdmin($id_adm, $nama_adm, $username_adm, $password_adm);
            header("Location: index.php");
        } else {
            $data = $this->adminModel->getAdminByID($id_adm);
            include __DIR__ . '/../views/admin/edit.php';
        }
    }

    public function delete($id_adm){
        $this->adminModel->deleteAdmin($id_adm);
        header("Location: index.php");
    }
}
?>
