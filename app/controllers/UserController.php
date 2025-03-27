<?php 
require_once __DIR__ . '/../models/User.php';
require_once __DIR__ . '/../../config/Database.php';

class UserController {
    private $userModel;

    public function __construct(){
        $db = new Database();
        $this->userModel = new User($db);
    }

    public function index(){
        $data = $this->userModel->getAllUser();

        include __DIR__. '/../views/user/index.php';
    }

    public function create(){
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $nama_usr = $_POST['nama_usr'];
            $username_usr = $_POST['username_usr'];
            $password_usr = $_POST['password_usr'];
            $this->userModel->createUser($nama_usr, $username_usr, $password_usr);
            header("Location: index.php");
        } else {
            include __DIR__ . '/../views/user/create.php';
        }
    }

    public function edit($id_usr){
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $nama_usr = $_POST['nama_usr'];
            $username_usr = $_POST['username_usr'];
            $password_usr = $_POST['password_usr']; 
            $this->userModel->updateUser($id_usr, $nama_usr, $username_usr, $password_usr);
            header("Location: index.php");
        } else {
            $data = $this->userModel->getUserByID($id_usr);
            include __DIR__ . '/../views/user/edit.php';
        }
    }

    public function delete($id_usr){
        $this->userModel->deleteUser($id_usr);
        header("Location: index.php");
    }
}
?>
