<?php

require_once 'app/controllers/RoomController.php';
require_once 'app/controllers/AdminController.php';
require_once 'app/controllers/UserController.php';
require_once 'app/controllers/PeminjamanController.php';


$controller = isset($_GET['controller']) ? $_GET['controller'] : 'room';
$action = isset($_GET['action']) ? $_GET['action'] : 'index';

switch ($controller) {
    case 'room' :
        $roomController = new RoomController();
        switch($action) {
            case 'index' :
                $roomController->index();
                break;
            case 'create' :
                $roomController->create();
                break;
            case 'edit' :
                $id_ruangan = $_GET['id'];
                $roomController->edit($id_ruangan);
                break;
            case 'delete' :
                $id_ruangan = $_GET['id'];
                $roomController->delete($id_ruangan);
                break;
            default :
                $roomController->index();
                break;
        }
        break;
    case 'admin' :
        $adminController = new AdminController();
        switch($action) {
            case 'index' :
                $adminController->index();
                break;
            case 'create' :
                $adminController->create();
                break;
            case 'edit' :
                $id_admin = $_GET['id'];
                $adminController->edit($id_admin);
                break;
            case 'delete' :
                $id_admin = $_GET['id'];
                $adminController->delete($id_admin);
                break;
            default :
                $adminController->index();
                break;
        }
        break;
        case 'user' :
            $userController = new UserController();
            switch($action) {
                case 'index' :
                    $userController->index();
                    break;
                case 'create' :
                    $userController->create();
                    break;
                case 'edit' :
                    $id_user = $_GET['id'];
                    $userController->edit($id_user);
                    break;
                case 'delete' :
                    $id_user = $_GET['id'];
                    $userController->delete($id_user);
                    break;
                default :
                    $userController->index();
                    break;
            }
            break;
        case 'rent' :
            $peminjamanController = new RentController();
            switch($action) {
                case 'index' :
                    $peminjamanController->index();
                    break;
                case 'create' :
                    $peminjamanController->create();
                    break;
                case 'edit' :
                    $id_peminjaman = $_GET['id'];
                    $peminjamanController->edit($id_peminjaman);
                    break;
                case 'delete' :
                    $id_peminjaman = $_GET['id'];
                    $peminjamanController->delete($id_peminjaman);
                    break;
                default :
                    $peminjamanController->index();
                    break;
            }
            break;
        default :
            echo "Controller not found!";
            break;
}