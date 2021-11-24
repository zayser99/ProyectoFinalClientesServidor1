<?php
include_once 'includes/user.php';
include_once 'includes/user_session.php';
include_once 'includes/productos.php';


$userSession = new UserSession();
$user = new User();
$productos = new Productos();

if(isset($_SESSION['user'])){
   // echo "hay sesion";
    $user->setUser($userSession->getCurrentUser());
    include_once 'pages/home_page.php';

}else if(isset($_POST['username']) && isset($_POST['password'])){
    
    $userForm = $_POST['username'];
    $passForm = $_POST['password'];

    $user = new User();
    if($user->userExists($userForm, $passForm)){
        //echo "Existe el usuario";
        $userSession->setCurrentUser($userForm);
        $user->setUser($userForm);

        include_once 'pages/home_page.php';
    }else{
        //echo "No existe el usuario";
        $errorLogin = "Nombre de usuario y/o password incorrecto";
        include_once 'pages/login-clientes.php';
    }
}else{
    //echo "login";
    include_once 'pages/login-clientes.php';
}



?>