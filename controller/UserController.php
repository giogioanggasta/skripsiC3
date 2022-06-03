<?php

require_once '../model/UserModel.php';
require_once '../helper/flash_session.php';

class UserController
{
    private $userModel;

    public function __construct()
    {
        $this->userModel = new UserModel();
    }

    public function login()
    {
        $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

        $data = [
            'email' => trim($_POST['email']),
            'password' => trim($_POST['password']),
        ];

        if (empty($data['email']) || empty($data['password'])) {
            flash('error_message', 'Semua kolom harus diisi.');
            redirect('../view/Login.php');
        }

        if ($this->userModel->findUserByEmail($data['email'])) {
            $loggedUser = $this->userModel->login($data['email'], $data['password']);

            if ($loggedUser) {
                $this->createUserSession($loggedUser);
            } else {
                flash('error_message', 'Password salah.');
                redirect('../view/Login.php');
            }
        } else {
            flash('error_message', 'Email atau password salah.');
            redirect('../view/Login.php');
        }
    }

    public function createUserSession($user){
        $_SESSION['idUser'] = $user->idUser;
        $_SESSION['namaUser'] = $user->namaUser;
        $_SESSION['jenisKelamin'] = $user->jenisKelamin;
        $_SESSION['tanggalLahir'] = $user->tanggalLahir;
        $_SESSION['noTelepon'] = $user->noTelepon;
        $_SESSION['email'] = $user->email;
        $_SESSION['tipeMembership'] = $user->tipeMembership;
        $_SESSION['statusMembership'] = $user->statusMembership;
        redirect("../index.php");
    }

    public function logout()
    {
        $destroy = session_destroy();
        redirect("../index.php");
    }

}

$init = new UserController();

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    switch($_POST['type']){
        case 'login':
            $init->login();
            break;
        default:
        redirect("../index.php");
    }
}else{
    switch($_GET['q']){
        case 'logout':
            $init->logout();
            break;
        default:
        redirect("../index.php");
    }
}